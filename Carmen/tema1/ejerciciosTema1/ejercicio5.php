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
				<tr>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Direccion</th>
					<th>Telefono</th>
				</tr>
				<tr>
					<?php
						$nombre = "Carmen";
						$apellidos = "López Calvo";
						$direccion = "La del Manojo de Rosas";
						$telefono = 23542697;
						echo "<td>";
							echo "$nombre";
						echo "</td>";
						echo "<td>";
							echo "$apellidos";
						echo "</td>";
						echo "<td>";
							echo "$direccion";
						echo "</td>";
						echo "<td>";
							echo "$telefono";
						echo "</td>";
						
					?>
				</tr>
			</tbody>
		</table>		
	</body>
</html>