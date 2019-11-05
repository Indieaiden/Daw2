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
			if(!isset($_COOKIE["nombre"])){
				echo "no se ha creado la cookie";
			}else{
				echo "Tu nombre es: ".$_COOKIE["nombre"];
			}
		?>
	</body>
</html>