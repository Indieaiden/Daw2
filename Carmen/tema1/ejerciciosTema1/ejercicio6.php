<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Página</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<ol>
			<?php
				$cancion1 = "Hablando en plata";
				$cancion2 = "Tu y yo";
				$cancion3 = "como una vela";
				$cancion4 = "gloria";
				$cancion5 = "como el agua";
				echo"<li>";
					echo "$cancion1";
				echo "</li>";
				echo"<li>";
					echo "$cancion2";
				echo "</li>";
				echo"<li>";
					echo "$cancion3";
				echo "</li>";
				echo"<li>";
					echo "$cancion4";
				echo "</li>";
				echo"<li>";
					echo "$cancion5";
				echo "</li>";
							
			?>	
		</ol>
	</body>
</html>