<!DOCTYPE html>
	<head>
		<Title> Prueba acceso a ficheros</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
		<!-- esta line es para acceder a los css <link href="CSS/MisEstilos.css" rel="stylsheet" type="text/css"/> -->
	</head>
	<body>
		<?php
	/*	
	$man =fopen('visitas.txt','r');
		$contador=0;
		while(!feof($man)){
			//tratar los datos del fichero
			$linea = fgets($man);
			if(!empty($linea) && ord($linea)!=13){
				echo $linea. '<br>';
				$contador++;
			}
			}
	fclose($man);
	echo 'Se han leido un total de ' .$contador . ' lineas <br>';
	rewint
	*/
	$fileName = "visitas.txt";
	$file = @fopen($fileName,"w+") or die('No se ha encontrado el fichero de visitas');
	$contador = intval(fread($file, filesize($fileName)));
	echo'Esta es la visita numero'.$contador;
	$contador++;
	rewind($file);
	fwrite($file,$contador);
	fClose($file);
		?>
	</body>
</html>