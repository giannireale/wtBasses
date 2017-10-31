<?php
	require 'functions.php';
	include("../bin/db_conn.php");
	session_start();
	try {
	
		$functions = new Functions;
		$userExists = $functions->verifica_login($_POST['email'], $_POST['password']);
		if($userExists){
			session_start();
			$_SESSION["logged"]=1; //restituisci vero alla chiave logged in SESSION
			$_SESSION['type']='success';
			$_SESSION['message']='Log-in effettuato correttamente';
			$_SESSION['news'] = '1';
			header('location:../index.php'); // se le prime condizioni non vanno bene entra in questo ramo else
		}else{
			$_SESSION['type']='danger';
			$_SESSION['message']='Username o password errata';
			header("location:../index.php");
		}
		header("location:../index.php");
	} catch (Exception $e) {
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
?>