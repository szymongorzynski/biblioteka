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
		<?php echo "<h1>BIBLIOTEKA - DODAWANIE CZYTELNIKA - ".$_SESSION['imie']." ".$_SESSION['nazwisko']."</h1><hr>"; 
		      echo "<a href='index.php'>Strona główna</a><br><a href='administrator.php'>Wstecz</a><br><br>";
				?>
		<form action="dodaj_cz.php" method="post">
			<label>ID czytelnika</label><br>
			<input type="text" name="czytelnik_id"><br>
			<label>Imię</label><br>
			<input type="text" name="imie"><br>
			<label>Nazwisko</label><br>
			<input type="text" name="nazwisko"><br>
			<label>Numer telefonu</label><br>
			<input type="text" name="nr_telefonu"><br><br>
			<button type="submit">Dodaj czytelnika</button>
		</form>
	</body>
</html>
