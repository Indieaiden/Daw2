<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Página</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		<link type ="text/css" rel="stylesheet" href="../css/ejercicio5.css"/>
		
	</head>
	<body>
		<table>
			<tbody>
					<?php
						$numero = 4;
						for($i = 0;$i<=10;$i++){
							echo "<tr>";
								echo "<td>";
									echo "$numero x $i = = = " ;
								echo "</td>";
								echo "<td>";
									echo ($numero*$i);
								echo "</td>";
							echo "</tr>";
						}
						
					?>
			</tbody>
		</table>		
	</body>
</html>