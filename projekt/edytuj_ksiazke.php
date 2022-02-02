<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<style>
			h1 { color: #555B6E; text-align: center; font-size: 40px; }
			hr { border: 3px solid #555B6E; }
			body { background-color: #BEE3DB; }
			a:link, a:visited, a:hover, a:active { text-decoration: none; color: #555B6E; font-size: 25px; }
		</style>
		<title>Biblioteka</title>
	</head>
	<body>
		<?php echo "<h1>BIBLIOTEKA - EDYTOWANIE KSIĄŻKI - ".$_SESSION['imie']." ".$_SESSION['nazwisko']."</h1><hr>"; 
		      echo "<a href='index.php'>Strona główna</a><br><a href='ksiegozbior_admin.php'>Wstecz</a><br><br>";
		?>
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

		$sql = "SELECT * FROM ksiazki WHERE ksiazka_id=$id";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
         echo "<form action='edytuj.php?id=".$id."' method='post'>
               <label>Tytuł</label><br>
               <input type='text' name='tytul' value='".$row['tytul']."'><br>
               <label>Gatunek</label><br>
               <input type='text' name='gatunek' value='".$row['gatunek']."'><br>
               <label>Autor</label><br>
               <input type='text' name='autor' value='".$row['autor']."'><br><br>
               <button type='submit'>Edytuj książkę</button>
               </form>";
         }
      }
		$conn->close();
      ?>
	</body>
</html>
