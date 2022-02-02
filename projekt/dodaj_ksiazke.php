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
		<?php echo "<h1>BIBLIOTEKA - DODAWANIE KSIĄŻKI - ".$_SESSION['imie']." ".$_SESSION['nazwisko']."</h1><hr>"; 
		      echo "<a href='index.php'>Strona główna</a><br><a href='administrator.php'>Wstecz</a><br><br>";
				?>
		<form action="dodaj.php" method="post">
			<label>ID książki</label><br>
			<input type="text" name="ksiazka_id"><br>
			<label>Tytuł</label><br>
			<input type="text" name="tytul"><br>
			<label>Gatunek</label><br>
			<input type="text" name="gatunek"><br>
			<label>Autor</label><br>
			<input type="text" name="autor"><br><br>
			<button type="submit">Dodaj książkę</button>
		</form>
	</body>
</html>
