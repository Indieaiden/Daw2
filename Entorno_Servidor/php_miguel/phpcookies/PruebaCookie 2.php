<!DOCTYPE html>
	<head>
		<Title>Creacion de cookies</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
		<!-- esta line es para acceder a los css <link href="CSS/MisEstilos.css" rel="stylsheet" type="text/css"/> -->
	</head>
	<body>
		<?php
			if (!isset($_COOKIE["madalena"])){
				
				echo"No se ha encontrado la galleta";
			}else{
				echo"Tu nombre es ".$_COOKIE["madalena"];
			}
		?>
	</body>
</html>