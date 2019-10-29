<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Sesion contador</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
			if(!isset($_SESSION["login"])){
				echo'Lo sentimos pero el usuario no es valido';
			}elseif(isset($_SESSION["login"])){
				echo $_SESSION["login"];
			}
		?>
	</body>
</html>