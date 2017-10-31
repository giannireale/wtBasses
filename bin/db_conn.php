<?php # classe per l'interazione con il database    
if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'localhost:8088') {
    $user = 'root';
    $password = 'qwerty01';
    $db = 'unique';
    $host = 'localhost';
    $port = 3306;

    $link = mysqli_init();
    $success = mysqli_real_connect(
       $link,
       $host,
       $user,
       $password,
       $db,
       $port
    );
} else {
	$user = 'root';
    $password = 'qwerty01';
    $db = 'unique';
    $host = 'localhost';
    $port = 3306;

    $link = mysqli_init();
    $success = mysqli_real_connect(
       $link,
       $host,
       $user,
       $password,
       $db,
       $port
    );
	
	
    //$connessione = mysql_connect("mysql.netsons.com", "soirkivm_unique", "Gener@li$16") or die('Errore nella connessione: ' . mysql_error());
	//$connessione = mysql_connect("db4free.net", "soirkivm_unique", "Gener@li$16") or die('Errore nella connessione: ' . mysql_error());
	//$connessione = mysql_connect("sql2.freesqldatabase.com", "sql294409", "dM4!jP7%") or die('Errore nella connessione: ' . mysql_error());
    //$connessione = mysql_connect("uniquefashion.x10host.com", "uniquefa_unique", "qwerty") or die('Errore nella connessione: ' . mysql_error());
     //$connessione = mysql_connect("localhost", "root", "") or die('Errore nella connessione: ' . mysql_error());
     //mysql_select_db($dbname, $connessione);
	//mysql_select_db('soirkivm_unique', $connessione);
}
?>