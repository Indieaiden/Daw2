<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Página</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<form action='procesar.php' method='post'>
			<label for="id_nombre">Nombre: </label>
			<input type="text" name="nombre" id="id_nombre"/><br/>
			
			<label for="id_contrasenia">Contraseña: </label>
			<input type="password" name="contrasenia" id="id_contrasenia"/><br/>
			
			Sexo: <br/>
			<label for="id_hombre">Hombre</label><br/>
			<input type="radio" name="sexo" id="id_hombre" value="hombre"/><br/>
			<label for="id_mujer">Mujer</label><br/>
			<input type="radio" name="sexo" id="id_mujer" value="mujer"/><br/>
			<input type="submit" value="enviar"/>
		</form>
	</body>
</html>