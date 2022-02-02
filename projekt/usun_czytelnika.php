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
      
      $id = $_GET['id'];

		$sql = "DELETE FROM czytelnicy WHERE czytelnik_id=$id";
		$conn->query($sql);
   
      header("Location: czytelnicy_lista.php");
		$conn->close();
?>