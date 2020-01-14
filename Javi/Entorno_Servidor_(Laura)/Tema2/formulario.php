<html>
	<head>
		<title>Formulario</title>
		<meta charset="UTF-8" />
		<meta name="description" content="Formulario de pruebas para php">
		<meta name="author" content="Javier">
	</head>
	<body>
		<h1>FORMULARIO</h1>
		<form action="procesar.php" method="post">
			<label for="id_nombre">Nombre:</label><br/>
			<input type="text" name="nombre" id="id_nombre"><br/><br/>
			<label for="id_contrasena">Password:</label><br/>
			<input type="password" name="contrasena" id="id_contrasena"><br/><br/>
			Sexo:<br/><label for="tipo_sexo">Hombre</label>
			<input type="radio" name="sexo" id="tipo_sexo" value="Hombre"><br/>
			<label for="tipo_sexo">Mujer</label>
			<input type="radio" name="sexo" id="tipo_sexo" value="Mujer"><br/>
			<label for="tipo_sexo" >Ns/Nc</label>
			<input type="radio" name="sexo" id="tipo_sexo" value="Sin_respuesta" checked="checked"><br/><br/>
			Aficiones:<label for="Id_aficiones"><br/>Videojuegos</label>
			<input type="checkbox" name="aficiones[]" id="id_aficiones" value="Videojuegos"><br/>
			<label for="id_aficiones">Deportes</label>
			<input type="checkbox" name="aficiones[]" id="id_aficiones" value="Deportes"><br/>
			<label for="id_aficiones">Comprar 2 cactus a 3 euros ud</label>
			<input type="checkbox" name="aficiones[]" id="id_aficiones" value="2cactusX3euros"><br/>
			<label for="id_aficiones">Dormir</label>
			<input type="checkbox" name="aficiones[]" id="id_aficiones" value="ToSleep"><br/><br/>
			<input type="submit" value="Enviar">
		</form>
	</body>
<html>