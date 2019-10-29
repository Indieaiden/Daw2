<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title>Practica Objetos</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<p>
			soy la pagina llamada
		</p>
		<?php
			$arrLlaves=array_keys($_POST);
			$nombre = $_REQUEST['nombre'];
			$edad = $_REQUEST['edad'];
			echo"variable: $arrLlaves[0] <br>";
			echo"valor: $nombre <br>";
			echo"variable: $arrLlaves[1] <br>";
			echo"valor: $edad <br>";
		?>
	</body>
</html>