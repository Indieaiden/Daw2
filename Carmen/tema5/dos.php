<!DOCTYPE html>
<html lang="es">
	<head>
		<title>procesar</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primera página"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php
			if (isset($_POST['nombre']) ){
			
				echo $_POST['nombre'];
				echo "<br/>";
			}
			if (isset($_POST['contrasena']) ){
			
				echo $_POST['contrasena'];
				echo "<br/>";
			}
			if (isset($_POST['animal']) ){
				$variable = $_POST['animal'];
				echo (implode(",",$variable));
				echo "<br/>";
			}		
			if (isset($_POST['idioma']) ){
				
				echo (implode(",",$_POST['idioma']));
				echo "<br/>";
			}
			if (isset($_POST['genero']) ){
			
				echo (implode($_POST['genero']));
			}
			
			
		?>
	
	</body>
</html>