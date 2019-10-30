<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Prueba De Formularios </Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<form action="dos.php" method="post">
			<input type="text" name="cadcar" value="kawaii" size="20"><br>
			<input type="radio" name="genero" value="M" checked>Mujer<br>
			<input type="radio" name="genero" value="H" >hombre<br>
			<br>
			<input type="checkbox" name="aditivos[]" value="dinero" checked>Dinero<br>
			<input type="checkbox" name="aditivos[]" value="comida">Salud<br>
			<input type="checkbox" name="aditivos[]" value="tiempo">Tiempo<br><br>
			<input type="button" name="actualizar" value="Boton"><br>
			<input type="hidden" name="username" value="$usuario"><br>
			<input type="password" name="clave"><br><br>
			<input type="submit" name="enviar" value="Enviar datos"><br>
			<select name ="color"><br>
				<option value="rojo" selected>Rojo
				<option value="verde">Verde
				<option value="azul">Azul
			</select>
			<select multiple size="3" name="idiomas[]"><br>
				<option value="Anime" selected>Anime
				<option value="Manga">Manga
				<option value="Comic">Cómic
				<option value="LiveAction">Live Action
			</select><br>
			<textarea cols="50" rows="4" name="comentario">No me he leido este libro pero...
			</textarea>
		</form>
		<?php
		/*cambiar nombre a uno
		hacer un dos que sea el que tiene las movidas de php
		hacer una tercera con todo junto
		*/
		?>
	</body>
</html>
