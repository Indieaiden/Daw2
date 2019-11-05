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
			$niñas = 25;
			$niños = 38;
			
			$total = $niñas+$niños;
			$porcenNiñas = ($niñas * 100)/$total;			
			$porcenNiños = ($niños * 100)/$total;	
			
			printf("%'*10.5d","El porcentaje total de niñas es : $porcenNiñas % <br>") ;
			echo "El porcentaje total de niños es : $porcenNiños%";
		?>
	</body>
</html>