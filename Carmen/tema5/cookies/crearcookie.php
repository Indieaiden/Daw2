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
			if(setcookie("nombre","Carmen")){
				echo "se ha creado la cookie";
			}else{
				echo "no se ha podido crear la cookie";
			}
		?>
	</body>
</html>