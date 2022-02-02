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
      $tytul = $_POST['tytul'];
      $gatunek = $_POST['gatunek'];
      $autor = $_POST['autor'];

		$sql = "UPDATE ksiazki SET tytul='$tytul', gatunek='$gatunek', autor='$autor' WHERE ksiazka_id=$id";
		// $sql = "UPDATE ksiazki SET ksiazka_id=$";
		$conn->query($sql);

		if ($conn->query($sql) === TRUE) {
			header("Location: ksiegozbior_admin.php");
		 } else {
			echo "Error updating record: " . $conn->error;
		 }
		$conn->close();
?>