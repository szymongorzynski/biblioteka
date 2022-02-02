<?php
$servername = "localhost";
$username = "id17168618_admin1";
$password = "c)XJDjo]}zLL4beK";
$dbname = "id17168618_biblioteka";
	
		// create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		//check connection
		if	($conn->connect_error) {
			die("Błąd połączenia: ".$conn->connect_error);
      }	
      
      $czytelnik_id = $_POST['czytelnik_id'];
      $imie = $_POST['imie'];
      $nazwisko = $_POST['nazwisko'];
      $nr_telefonu = $_POST['nr_telefonu'];

		$sql = "INSERT INTO czytelnicy VALUES ($czytelnik_id, '$imie', '$nazwisko', '$nr_telefonu')";
		$result = $conn->query($sql);
   
      header("Location: czytelnicy_lista.php");
		$conn->close();
?>