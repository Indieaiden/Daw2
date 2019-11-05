<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Cookie</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primera página"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		
		<?php
		$path = __DIR__;
			setcookie("nombre","PEPE",time() + 60, $path);
				echo "se ha Creado la cookie";
		?>
	</body>
</html>