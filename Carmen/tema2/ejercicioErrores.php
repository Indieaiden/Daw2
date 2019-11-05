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
			echo (3 + "hola"."<br>");
			$nivelInicial = error_reporting();
			
			error_reporting(E_ERROR);
			echo (3 + "hola"."<br>");
			error_reporting($nivelInicial);
			echo "hola ". 0x5. "<br>";
			function incremento(){
				static $variable = 0;
				$variable++;
				echo $variable."<br>";
			}
			incremento();
			incremento();
			incremento();
			
			
			
		?>
	</body>
</html>