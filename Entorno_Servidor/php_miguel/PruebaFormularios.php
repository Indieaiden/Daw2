<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Prueba De Formularios </Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<form action="dos.php" method="post">
			<input type="text" name="cadcar" value="vnssbakjbaksv" size="20">
			<input type="radio" name="genero" value="M" checked>Mujer
			<input type="radio" name="genero" value="H" >hombre
			<input type="checkbox" name="aditivos[]" value="dinero" checked>Dinero
			<input type="checkbox" name="aditivos[]" value="comida">Comida
			<input type="checkbox" name="aditivos[]" value="tiempo">Tiempo
			<input type="button" name="actualizar" value="Actualizar datos">
			<input type="checkbox" name="aditivos[]" value="tiempo">
		</form>
		<?php
		/*cambiar nombre a uno
		hacer un dos que sea el que tiene las movidas de php
		hacer una tercera con todo junto
		*/
		?>
	</body>
</html>