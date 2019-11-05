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
						$persona = array('nmbre'=>"Carmen",'apellidos'=>"López Calvo",'direccion'=>"Madrid",'telefono'=>6542317895);
						foreach($persona as $rec=>$valor){
							echo "<td>";
								echo $valor;
							echo "</td>";
						}
					?>
				</tr>
			</tbody>
		</table>
			
	
	</body>
</html>