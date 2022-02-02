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

    $sql0 = "SELECT * FROM ksiazki WHERE ksiazka_id=$id";
    $result = $conn -> query($sql0);

    if ($result !== false && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc())
      {
        $sql1 = "UPDATE ksiazki SET dostepnosc='wypożyczono' WHERE ksiazka_id=$id";
        $sql2 = "UPDATE ksiazki SET dostepnosc='dostępna' WHERE ksiazka_id=$id";
        
        if ($row['dostepnosc'] === "dostępna") $conn->query($sql1);
        else $conn -> query($sql2);        
      }
    }
			header("Location: ksiegozbior_czyt.php");

		$conn->close();
?>