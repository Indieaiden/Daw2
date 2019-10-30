<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8">
<Title> Prueba acceso a ficheros</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
		<!-- <link rel="stylesheet" type="text/css" href="./css/actividades2.css"/> esta line es para acceder a los css -->
	</head>
	<body>
<?php
	$man =fopen('ficheros/textos.txt','r');
	$contador=0;
	while(!feof($man))
	{
		//tratar los datos del fichero
		$linea = fgets($man);
		if(!empty($linea) && ord($linea)!=13)
		{
			echo $linea. '<br>';
			$contador++;
		}
	}
	fclose($man);
	echo 'Se han leido un total de ' .$contador . ' lineas <br>';
?>	
	</body>
</html>