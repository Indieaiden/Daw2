<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Constantes</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php
			
			foreach($_SERVER as $clave =>$valor){
				echo "$clave => $valor <br>";
			}
		?>
	</body>
</html>