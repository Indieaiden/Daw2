<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Página</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php
			$msg1 = "holi";
			$msg2 = "que tal";
			$msg3 = "yo bien";
			$msg4 = "y tu";
	
			$mensaje = "msg". rand(1,4);
			
			echo "${$mensaje}";
		?>
	</body>
</html>