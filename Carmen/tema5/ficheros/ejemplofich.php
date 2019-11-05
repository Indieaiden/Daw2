<html> 
	<head> 
		<title> PHP: Lectura y Escritura de Ficheros </title>
	</head>
	<body>
	<?php
		// Definimos el nombre del recurso remoto del que se va a leer y el nombre del fichero local donde se va a escribir
		define("FICH_REMOTO", 'http://192.168.98.16/Servidor/f_remoto.php'); // x.y.w.z es la IP del servidor remoto
		define("FICH_LOCAL", 'fich_salida.txt');
		// Abrimos los ficheros y comprobamos resultados
		$fich_remoto = @fopen(FICH_REMOTO, 'r') or die("ERROR al abrir el recurso remoto");
		$fich_local = @fopen(FICH_LOCAL, 'w') or die("ERROR al abrir el recurso local");
		$contador_bytes = 0; // inicializamos a 0 el contador de bytes procesados
		// Procesamos cada línea del recurso remoto hasta que alcance el final de fichero
		while ($linea = fgets($fich_remoto))
		{ $nbytes = fwrite($fich_local, $linea) ; // escribimos la línea leida en el fichero local
		$contador_bytes = $contador_bytes + $nbytes ; // Incrementamos el contador con el no de bytes procesados
		}
		fclose($fich_remoto); // cerramos los ficheros
		fclose($fich_local);
		echo "Total de bytes procesados: $contador_bytes<br />"; // Mostramos el número de bytes leídos (y escritos)
	?>
	</body>
</html>