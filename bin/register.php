<?php
	// dive essere la prima cosa nella pagina, aprire la sessione
	include("../bin/db_conn.php"); // includo il file di connessione al database
	session_start();
	if($_POST["username"] != "" && $_POST["password"]!= "" && $_POST["email"] != ""){ // se i parametri iscritto non sono vuoti non sono vuote
		$query = mysqli_query($link, "SELECT email FROM user WHERE email = '".$_POST["email"]."'") or die('Errore: ' . mysqli_error($success));
		$conta = mysqli_num_rows($query);
		if ($conta == 0) 
		{
			$password = md5($_POST["password"]);
			$password1 =  sha1($password);
			$query_registrazione = mysqli_query($link, "INSERT INTO user (email,password,username) VALUES ('".$_POST["email"]."','".$password1."','".$_POST["username"]."')") // scrivo sul DB questi valori
			or die ("query di registrazione non riuscita".mysqli_error($success)); // se la query fallisce mostrami questo errore
		}else{
			$_SESSION['type']="danger";
			$_SESSION['message']="Utente esistente";
			header("location:../index.php"); // altrimenti esce scritta a video questa stringa
		}
		if(isset($query_registrazione)){ //se la reg è andata a buon fine
			$_SESSION["logged"]=1; //restituisci vero alla chiave logged in SESSION
			$_SESSION['type']='success';
			$_SESSION['message']='Registrazione effettuata correttamente, verifica la tua email';
			header("location:../index.php");
		}else{
			$_SESSION['type']="danger";
			$_SESSION['message']="Non ti sei registrato con successo"; // altrimenti esce scritta a video questa stringa
			header("location:../index.php");
		}
	}else{
		$_SESSION['type']="danger";
		$_SESSION['message']="Non hai compilato tutti i campi obbligatori";
		header("location:../index.php");
	}
?>