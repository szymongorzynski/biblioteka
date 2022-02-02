<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<style>
			h1 { color: #555B6E; text-align: center; font-size: 40px; }
			hr { border: 3px solid #555B6E; }
			body { background-color: #BEE3DB; }
			table { background-color: #89B0AE; width: 100%; }
			tr, td { text-align: center; color: #FAF9F9; border: 1px solid #FAF9F9; font-size: 20px;}
			a:link, a:visited, a:hover, a:active { text-decoration: none; color: #555B6E; font-size: 25px; }
		</style>
		<title>Biblioteka</title>
	</head>
	<body>
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
	$sql = "SELECT * FROM czytelnicy";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
      // output data of each row
      echo "<h1>BIBLIOTEKA - BAZA CZYTELNIKÓW - ".$_SESSION['imie']." ".$_SESSION['nazwisko']."</h1><hr>";
      echo "<a href='index.php'>Strona główna</a><br><a href='administrator.php'>Wstecz</a><br><br>";
      echo "<table><tr><td>ID czytelnika</td><td>Imię</td><td>Nazwisko</td><td>Numer telefonu</td></tr>";
      while ($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row['czytelnik_id']."</td>
					<td>".$row['imie']."</td>
					<td>".$row['nazwisko']."</td>
					<td>".$row['nr_telefonu']."</td>
					<td><a href='edytuj_czytelnika.php?id=".$row['czytelnik_id']."'>Edytuj</a></td>
					<td><a href='usun_czytelnika.php?id=".$row['czytelnik_id']."'>Usuń</a></td></tr>";
      }
      echo "</table>";
	} else {
		echo "0 results<br>";
		echo "<a href='index.php'>Strona główna</a>";
	}
	$conn->close();
   ?>
	</body>
</html>
