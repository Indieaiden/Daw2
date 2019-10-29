<!DOCTYPE html>
	<head>
		<Title>Creacion de cookies</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
		<!-- esta line es para acceder a los css <link href="CSS/MisEstilos.css" rel="stylsheet" type="text/css"/> -->
	</head>
	<body>
		<?php
		//$path=$_SERVER['REQUEST_URI'];
		$path = "./phpcookies";
		setcookie("madalena", "cupcake", time()+3600,$path);
		setcookie("madalena", "cupcake", time()-1,$path);
			echo "Es que soy de albacete";
		?>
	</body>
</html>