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
      $imie = $_POST['imie'];
      $nazwisko = $_POST['nazwisko'];
      $nr_telefonu = $_POST['nr_telefonu'];

		$sql = "UPDATE czytelnicy SET imie='$imie', nazwisko='$nazwisko', nr_telefonu='$nr_telefonu' WHERE czytelnik_id=$id";
		// $sql = "UPDATE ksiazki SET ksiazka_id=$";
		$conn->query($sql);

		if ($conn->query($sql) === TRUE) {
			header("Location: czytelnicy_lista.php");
		 } else {
			echo "Error updating record: " . $conn->error;
		 }
		$conn->close();
?>