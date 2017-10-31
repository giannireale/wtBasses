<?
session_start(); // dive essere la prima cosa nella pagina, aprire la sessione
include("../bin/db_conn.php"); // includo il file di connessione al database

$query = mysql_query("CREATE TABLE 'soirkivm_unique'.'user' (
  'email' VARCHAR(50) NOT NULL,
  'username' VARCHAR(45) NULL,
  'password' VARCHAR(45) NULL,
  PRIMARY KEY ('email'));") or die('Errore: ' . mysql_error());


?>