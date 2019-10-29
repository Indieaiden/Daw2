<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Sesion contador</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
		session_start();
		echo "contador: ".$_SESSION['contador'];
		?>
		<a href="contador1.php"> Pagina que muestra el contador </a>
	</body>
</html>