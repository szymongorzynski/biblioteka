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
			table { background-color: #89B0AE; width: 100%; }
			tr, td { text-align: center; color: #FAF9F9; border: 1px solid #FAF9F9; font-size: 20px;}
			a:link, a:visited, a:hover, a:active { text-decoration: none; color: #555B6E; font-size: 25px; }
			td#main { font-size: 35px; }
			#zegar { color: #555B6E; float: right; font-size: 15px;  }
		</style>
		<title>Biblioteka</title>
		<script src="zegarek.js" defer></script>
	</head>
	<body onload="zegarek()">
		<div id="zegar"></div>
	<?php
		echo "<h1>BIBLIOTEKA - PANEL ADMINISTRATORA - ".$_SESSION['imie']." ".$_SESSION['nazwisko']."</h1><hr>";
		echo "<a href='index.php'>Strona główna</a><br><br>";
		echo "<table>
				<tr><td colspan='2' id='main'><b>Księgozbiór</b></td></tr>
				<tr><td><a href='dodaj_ksiazke.php'>Dodaj książkę</a></td>
				<td><a href='ksiegozbior_admin.php'>Wyświetl i edytuj księgozbiór</a></td></tr>
				</table>";
		echo "<br><br>
				<table>
				<tr><td colspan='2' id='main'><b>Czytelnicy</b></td></tr>
				<tr><td><a href='dodaj_czytelnika.php'>Dodaj czytelnika</a></td>
				<td><a href='czytelnicy_lista.php'>Wyświetl i edytuj czytelników</a></td></tr>
				</table>";
	?>
	</body>
</html>
