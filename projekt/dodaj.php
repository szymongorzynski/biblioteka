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
      
      $ksiazka_id = $_POST['ksiazka_id'];
      $tytul = $_POST['tytul'];
      $gatunek = $_POST['gatunek'];
      $autor = $_POST['autor'];

		$sql = "INSERT INTO ksiazki VALUES ($ksiazka_id, '$tytul', '$gatunek', '$autor', 'dostępna')";
		$result = $conn->query($sql);
   
      header("Location: ksiegozbior_admin.php");
		$conn->close();
?>