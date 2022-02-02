<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<style>
			h1 { color: #555B6E; text-align: center; font-size: 40px; }
			hr { border: 3px solid #555B6E; }
			body { background-color: #BEE3DB; }
			a:link, a:visited, a:hover, a:active { text-decoration: none; color: #555B6E; font-size: 25px; }
			p { color: #555B6E; font-size: 25px; }
			#zegar { color: #555B6E; float: right; font-size: 15px;  }
		</style>
		<title>Biblioteka</title>
		<script src="zegarek.js" defer></script>
	</head>
	<body onload="zegarek()">
		<div id="zegar"></div>
		<h1>BIBLIOTEKA</h1>
		<hr>
		<p>ADMINISTRATOR - Panel administracyjny</p>
		<form action="zaloguj.php" method="post">
			<label>Login</label>
			<input type="text" name="login"><br>
			<label>Hasło</label>
			<input type="password" name="haslo"><br>
			<button type="submit">Zaloguj</button>
		</form>
		<br><br>
		<p>CZYTELNIK - Wyświetl księgozbiór</p>
		<form action="zaloguj_czyt.php" method="post">
			<label>Imię</label>
			<input type="text" name="imie"><br>
			<label>Nazwisko</label>
			<input type="text" name="nazwisko"><br>
			<button type="submit">Wejdź</button>
		</form>
	</body>
</html>
