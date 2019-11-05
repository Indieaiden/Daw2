<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<h1>Bienveido al mundo de la multiplicación</h1>
		<form action='mostrar.php' method='post'>
			<label for="id_desde">Desde el numero : </label>
			<input type="number" required="rerquired" name="desde" id="id_desde"/><br/>
			
			<label for="id_hasta">Hasta el numero : </label>
			<input type="number" required="rerquired" name="hasta" id="id_hasta"/><br/>
			
			<input type="submit" value="Ver tabla"/>
		</form>
	</body>
</html>