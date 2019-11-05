<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<h1>Identificación de usuario.</h1>
		<form action='MENSAJES.php' method='get'>
			<label for="id_texto">Nombre : </label>
			<input type="text" name="nombre" id="id_texto"/><br/>
			<label for="id_password">Password : </label>
			<input type="password" name="contrasena" id="id_password"/><br/>
		
			<input type="submit" value="Entrar"/>
		</form>
	</body>
</html>