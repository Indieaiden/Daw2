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
			
			if(defined('MONEDA')== false){
				define("MONEDA","EURO");
			}
			echo MONEDA;
			echo Moneda;
		?>
	</body>
</html>