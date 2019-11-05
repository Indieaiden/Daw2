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
							$guardar = get_defined_constants();
							foreach($guardar as $rec=>$valor){
								echo "<tr>";
									echo "<td>";
										echo "$rec = ";
									echo "</td>";
									echo "<td>";
										echo " $valor";
									echo "</td>";
								echo "</tr>";
							}
						?>
				</tbody>
		</table>
		
	</body>
</html>