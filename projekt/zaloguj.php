<?php
	session_start();

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

	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	
	$sql = "SELECT * FROM administratorzy WHERE login='$login' AND haslo='$haslo'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			$_SESSION['imie'] = $row['imie'];
			$_SESSION['nazwisko'] = $row['nazwisko'];
			header("Location: administrator.php");
		}
	} else {
		echo "0 results<br>";
		echo "<a href='index.php'>Strona główna</a>";
	}
	$conn->close();
?>