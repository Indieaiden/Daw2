<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Ejercicio Variables </Title>
		<link href="CssEjerciciosVariables3.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8"/>
	</head>
	<body>
	<table>
		<tr>
			<th class="Color1"> Color 1 </th>
			<th class="Color2"> Color 2 </th>
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
	</body>
</html>