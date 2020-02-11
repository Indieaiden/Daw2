<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Encuesta. Resultados de la votación</title>
</head>
<body>
	<h1>Encuesta. Resultados de la votación</h1>
	<?php // Encuesta-resultados.php
	// Conectar con la base de datos
	$connection = mysqli_connect ("localhost", "encuesta", "1234", "mercados") or die ("No se puede conectar al servidor");

	$instruccion = "select * from votos"; // Obtener datos actuales de la votación
	$consulta = mysqli_query ( $connection, $instruccion) or die ("Fallo en la selección");
	$resultado = mysqli_fetch_array ($consulta);

	$votos1 = $resultado["votos1"];
	$votos2 = $resultado["votos2"];
	$totalVotos = $votos1 + $votos2;
	// Mostrar gráfico de tarta

//img alt="tarta" src="ej13_encuesta_tarta.php?votos1= X &votos2= X  <br>"
	print ("<img alt=\"Tarta\" src=\"ej13_encuesta_tarta.php?votos1=$votos1&votos2=$votos2\"><br>");
	//chicha
	print ("<p>Número total de votos emitidos: $totalVotos </p><br>");
	print ("<p><a href=\"ej13_encuesta.php\">página de votación</a></p><br>");
	mysqli_close ($connection); // Desconectar
	?>
</body>
</html>
