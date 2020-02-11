<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Encuesta</title>
</head>
<body>
	<?php // encuesta.php
	@ $enviar = $_REQUEST['enviar'];
	if (isset($enviar)) {

		print ("<h1>Encuesta. Voto registrado</h1>\n");
		// Conectar con la base de datos
		$connection = mysqli_connect ("localhost", "encuesta", "1234", "mercados") or die ("No se puede conectar al servidor");
		$instruccion = "select votos1, votos2 from votos"; // Obtener votos actuales
		$consulta = mysqli_query ($connection, $instruccion) or die ("Fallo en la selección");
		$resultado = mysqli_fetch_array ($consulta);
		// Actualizar votos
		$votos1 = $resultado["votos1"];
		$votos2 = $resultado["votos2"];
		$voto = $_REQUEST['voto'];
		if ($voto == "si"){
			$votos1 = $votos1 + 1;
		}else if ($voto == "no"){
			$votos2 = $votos2 + 1;
		}
		$instruccion = "update votos set votos1=$votos1, votos2=$votos2";
		$instruccion = "update votos set votos1=$votos1, votos2=$votos2";
		$actualizacion = mysqli_query ($connection, $instruccion) or die ("Fallo en la modificación");
		mysqli_close ($connection); // Desconectar
		// Mostrar mensaje de agradecimiento
		print ("<p>Su voto ha sido registrado. Gracias por participar</p>");
		print ("<a href='ej13_encuesta_resultados.php'>Ver resultados</a>");
	}
	else
	{
		?>
		<h1>Encuesta</h1>
		<P>¿Cree ud. que el precio de la vivienda seguirá bajando al ritmo actual?</P>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="radio" name="voto" value="si" checked>sí<br>
			<input type="radio" name="voto" value="no">no<br><br>
			<input type="submit" name="enviar" value="votar">
		</form>
		<a href="ej13_encuesta_resultados.php">Ver resultados</a>
		<?php
	}
	?>
</body>
</html>
