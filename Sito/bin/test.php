<?php
		include("../bin/db_conn.php");
		$password  = mysqli_real_escape_string($link,"qwerty01");;
		$password1 = md5($password);
		$password2 = sha1($password1);
		echo $password2;

?>