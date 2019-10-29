<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Ejercicio Variables </Title>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<table>
		<tr>
			<th> Color 1 </th>
			<th> Color 2 </th>
		</tr>
		<?php
		$mat = rand(0,360);
		$satur = rand(0,100);
		$lum = rand(0,100);
		
		$mat2 = rand(0,360);
		$satur2 = rand(0,100);
		$lum2 = rand(0,100);
	echo"<tr>",
			"<td style=\"background-color:hsl($mat,$satur%,$lum%)\"> </td>",
			"<td style=\"background-color:hsl($mat2,$satur2%,$lum2%)\">  </td>",
		"</tr>",
	"</table>";
		?>
		
		<table>
		<tr>
			<th> Color 3 </th>
		</tr>
		<?php
		
		$mat3 = rand(0,360);
		$satur3 = rand(0,100);
		$lum3 = rand(0,100);
	echo"<tr>",
			"<td style=\"background-color:hsl($mat3,$satur3%,$lum3%)\"> </td>",
		"</tr>",
	"</table>";
	
	
	
	
	
	//EJercicio 14
		?>
		
	</body>
</html>