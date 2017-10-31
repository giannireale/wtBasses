<?php

class Functions {

	public function mostra_utente($id_utente) {
		$query = @mysql_query("SELECT username FROM users WHERE username = $id_utente") or die('Errore: ' . mysql_error());
		$risultato = @mysql_fetch_object($query);
		echo $risultato -> username;
	}

	public function verifica_login($email_o_nome_utente, $password) {
		include("../bin/db_conn.php");
		
		
		$password  = mysqli_real_escape_string($link,$password);
		$password1 = md5($password);
		$password2 = sha1($password1);
		echo $password2;
		$query = mysqli_query($link, "SELECT email FROM users WHERE (email = '$email_o_nome_utente' OR username='$email_o_nome_utente') AND password = '$password2'") or die('Errore: ' . mysqli_error($link));
		$conta = mysqli_num_rows($query);
		if ($conta == 1) {
			$risultato = mysqli_fetch_object($query);
			$_SESSION['logged'] = 1;
			$_SESSION['id_utente'] = $risultato -> username;
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function verifica_sessione() {
		if (isset($_SESSION['login'])) {
			return $_SESSION['login'];
		} else {
			return FALSE;
		}
	}

	public function esci() {
		$_SESSION['login'] = FALSE;
		@session_destroy();
	}

	# metodo per la visualizzazione del nome utente
	public function mostra_username($id_utente) {
		# estrazione del dato sulla base dell'identificativo univoco memorizzato in sessione
		$query = @mysqli_query($link,"SELECT nome_utente FROM iscritti WHERE id_utente = $id_utente") or die(mysqli_error($link));
		$risultato = mysql_fetch_object($query);
		# stampa a video del risultato
		echo $risultato -> nome_utente;
	}

	public function leggi_cartella_slides($directory) {
		//Imposto la directory da leggere
		//$directory = "img/slidesHome/";
		// Apriamo una directory e leggiamone il contenuto.

		if (is_dir($directory)) {

			//Apro l'oggetto directory
			if ($directory_handle = opendir($directory)) {
				//Scorro l'oggetto fino a quando non è termnato cioè false
				while (($file = readdir($directory_handle)) !== false) {

					//Se l'elemento trovato è diverso da una directory
					//o dagli elementi . e .. lo visualizzo a schermo
					if ((!is_dir($file)) & ($file != ".") & ($file != ".."))
						echo "<div data-p=\"225.00\" style=\"display: none;\">
			<img data-u=\"image\" src=\"$directory$file\" /> </div>";
				}
				//Chiudo la lettura della directory.
				closedir($directory_handle);
			}
		}
	}

	public function leggi_cartella_bambina($directory) {
		//Imposto la directory da leggere
		//$directory = "img/slidesHome/";
		// Apriamo una directory e leggiamone il contenuto.

		if (is_dir($directory)) {

			//Apro l'oggetto directory
			if ($directory_handle = opendir($directory)) {
				//Scorro l'oggetto fino a quando non è termnato cioè false
				while (($file = readdir($directory_handle)) !== false) {

					//Se l'elemento trovato è diverso da una directory
					//o dagli elementi . e .. lo visualizzo a schermo
					if ((!is_dir($file)) & ($file != ".") & ($file != ".."))

						echo "			<div data-p=\"122.50\" style=\"display: none;\">	
											<img data-u=\"image\" src=\"$directory$file\" /> 
							 			</div>";
				}
				//Chiudo la lettura della directory.
				closedir($directory_handle);
			}
		}
	}
	public function leggi_cartella_sposa($directory) {
		//Imposto la directory da leggere
		//$directory = "img/slidesHome/";
		// Apriamo una directory e leggiamone il contenuto.

		if (is_dir($directory)) {

			//Apro l'oggetto directory
			if ($directory_handle = opendir($directory)) {
				//Scorro l'oggetto fino a quando non è termnato cioè false
				while (($file = readdir($directory_handle)) !== false) {

					//Se l'elemento trovato è diverso da una directory
					//o dagli elementi . e .. lo visualizzo a schermo
					if ((!is_dir($file)) & ($file != ".") & ($file != ".."))

						echo "			<div data-p=\"122.50\" style=\"display: none;\">	
											<img data-u=\"image\" src=\"$directory$file\" /> 
							 			</div>";
				}
				//Chiudo la lettura della directory.
				closedir($directory_handle);
			}
		}
	}
	public function leggi_cartella_sposo($directory) {
		//Imposto la directory da leggere
		//$directory = "img/slidesHome/";
		// Apriamo una directory e leggiamone il contenuto.

		if (is_dir($directory)) {

			//Apro l'oggetto directory
			if ($directory_handle = opendir($directory)) {
				//Scorro l'oggetto fino a quando non è termnato cioè false
				while (($file = readdir($directory_handle)) !== false) {

					//Se l'elemento trovato è diverso da una directory
					//o dagli elementi . e .. lo visualizzo a schermo
					if ((!is_dir($file)) & ($file != ".") & ($file != ".."))

						echo "			<div data-p=\"122.50\" style=\"display: none;\">	
											<img data-u=\"image\" src=\"$directory$file\" /> 
							 			</div>";
				}
				//Chiudo la lettura della directory.
				closedir($directory_handle);
			}
		}
	}
		public function leggi_cartella_sposa_out($directory) {
		//Imposto la directory da leggere
		//$directory = "img/slidesHome/";
		// Apriamo una directory e leggiamone il contenuto.

		if (is_dir($directory)) {

			//Apro l'oggetto directory
			if ($directory_handle = opendir($directory)) {
				//Scorro l'oggetto fino a quando non è termnato cioè false
				while (($file = readdir($directory_handle)) !== false) {

					//Se l'elemento trovato è diverso da una directory
					//o dagli elementi . e .. lo visualizzo a schermo
					if ((!is_dir($file)) & ($file != ".") & ($file != ".."))

						echo "			<div data-p=\"122.50\" style=\"display: none;\">	
											<img data-u=\"image\" src=\"$directory$file\" /> 
							 			</div>";
				}
				//Chiudo la lettura della directory.
				closedir($directory_handle);
			}
		}
	}
}
?>