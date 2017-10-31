<?php
	// dive essere la prima cosa nella pagina, aprire la sessione
	include("../bin/db_conn.php"); // includo il file di connessione al database
	session_start();
	if($_POST["email"] != ""){ // se i parametri iscritto non sono vuoti non sono vuote
		$query = mysql_query("SELECT indirizzo FROM iscritti WHERE indirizzo = '".$_POST["email"]."'") or die('Errore: ' . mysql_error());
		$conta = mysql_num_rows($query);
		if ($conta == 0) 
		{
			$query_registrazione = mysql_query("INSERT INTO iscritti (indirizzo) VALUES ('".$_POST["email"]."')") // scrivo sul DB questi valori
			or die ("query di registrazione non riuscita".mysql_error()); // se la query fallisce mostrami questo errore
			$_SESSION['type']="info";
			$_SESSION['message']="Ti sei iscritto correttamente";
			header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
		}else{
			$_SESSION['type']="danger";
			$_SESSION['message']="Email esistente";
			header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
		}
	}else{
		$_SESSION['type']="danger";
		$_SESSION['message']="Non hai compilato tutti i campi obbligatori";
		header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
	}
?>