<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Ejercicio Formularios </Title>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<?php
			
			$var=@$_GET['nombre'];
			echo "$var";
			
			/*
			echo $_GET['id'];
	
			@ $nombre = $_GET['nombre'] or
				die ("falta el nombre, se ha producido un error");
			//print_r(error_get_last());
			@ $apellido = $_GET['apellido'] or
				die ("falta el apellido, se ha producido un error");
			echo'<h1>' ,$nombre ,' ' ,$apellido, '<h1>'
			*/
		?>	
	</body>
</html>