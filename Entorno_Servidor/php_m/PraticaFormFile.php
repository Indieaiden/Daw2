<!DOCTYPE html>
	<head>
		<Title> Prueba acceso a ficheros</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
		<!-- esta line es para acceder a los css <link href="CSS/MisEstilos.css" rel="stylsheet" type="text/css"/> -->
	</head>
	<body>
		<form action="PraticaFormFile2.php" method="post">
			nombre <input type="text" name="nombre" value="Juan" size="20" required="required">
			<br><br>
			comentario <textarea cols="50" rows="4" name="comentario" required="required">
			Este es mi comentario : 
			</textarea>
			<br><br>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>