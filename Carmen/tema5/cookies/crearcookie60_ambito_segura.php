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
		$dominio = "localhost";
		$secure = true;
			setcookie("nombre","PEPE",time() + 60, $path,$dominio,$secure);
				echo "se ha Creado la cookie";
		?>
	</body>
</html>