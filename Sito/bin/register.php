<?php

	// dive essere la prima cosa nella pagina, aprire la sessione
	include("../bin/db_conn.php"); // includo il file di connessione al database
	include("../bin/sendMail.php");
	session_start();
	if($_POST["username"] != "" && $_POST["password"]!= "" && $_POST["email"] != ""){ // se i parametri iscritto non sono vuoti non sono vuote
		$query = mysqli_query($link, "SELECT email FROM users WHERE email = '".$_POST["email"]."'") or die('Errore: ' . mysqli_error($success));
		$conta = mysqli_num_rows($query);
		if ($conta == 0) 
		{
			$username   = mysqli_real_escape_string($link,$_POST['username']);
	        $email      = mysqli_real_escape_string($link,$_POST['email']);
			
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
	        {
	        	$_SESSION['type']="danger";
				$_SESSION['message']="Invalid email address please type a valid email!!";
				header("location:../index.php");
	        }
			
	        $password  = mysqli_real_escape_string($link,$_POST['password']);
			$password1 = md5($password);
			$password2 = sha1($password1);
			
			echo $password2;
			
			$hash = md5( rand(0,1000) );
			$hash = mysqli_real_escape_string($link,$hash);
			$query_registrazione = mysqli_query($link,"insert into users(username,email,password,hash) values('".$username."','".$email."','".$password2."','".$hash."')") // scrivo sul DB questi valori
			or die ("query di registrazione non riuscita".mysqli_error($link)); // se la query fallisce mostrami questo errore
			
			if(isset($query_registrazione)){ //se la reg è andata a buon fine
				$_SESSION["logged"]=1; //restituisci vero alla chiave logged in SESSION
				header("location:../index.php");
			}else{
				$_SESSION['type']="danger";
				$_SESSION['message']="Non ti sei registrato con successo"; // altrimenti esce scritta a video questa stringa
				header("location:../index.php");
			}
			
			$message = '
 
			Thanks for signing up!
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
				 
				------------------------
				Username: '.$email.'
				Password: '.$_POST['password'].'
				------------------------
				 
			Please click this link to activate your account:
			https://giannireale88.altervista.org/bin/verifica.php?email='.$email.'&hash='.$hash.'
 
				';
			
			if(mail_attachment($email,"giannireale88@gmail.com","Admin","giannireale88@gmail.com","Conferma E-mail registrazione",$message) == "OK"){
				$_SESSION['type']="success";
				$_SESSION['message']="Email di conferma inviata, conferma ed effettua il login"; // altrimenti esce scritta a video questa stringa
				header("location:../index.php");
			}else{
				$_SESSION['type']="danger";
				$_SESSION['message']="Email non inviata"; // altrimenti esce scritta a video questa stringa
				header("location:../index.php");
			}
			
				
		}else{
			$_SESSION['type']="danger";
			$_SESSION['message']="Utente esistente";
			header("location:../index.php"); // altrimenti esce scritta a video questa stringa
		}
		
	}else{
		$_SESSION['type']="danger";
		$_SESSION['message']="Non hai compilato tutti i campi obbligatori";
		header("location:../index.php");
	}
?>