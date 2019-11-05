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
			$A = 25;
			$B = 38;
			
			$aux = $B;
			$B = $A;
			$A = $aux;
			
			echo "la variable ".' $A'." vale : $A <br>";
			echo "La variable ".' $B'." vale : $B ";
			
		?>
	</body>
</html>