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
			setcookie("nombre","Luis",time()- 1);
				echo "se ha borrado la cookie";
			
		?>
	</body>
</html>