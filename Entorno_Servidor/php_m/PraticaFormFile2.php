<!DOCTYPE html>
	<head>
		<Title> Prueba acceso a ficheros</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
		<!-- esta line es para acceder a los css <link href="CSS/MisEstilos.css" rel="stylsheet" type="text/css"/> -->
	</head>
	<body>
		<?php
		
		function filtrado($datos){
			$datos = trim($datos);//elimina espacios antes y después de los datos
			$datos = stripslashes($datos);//elimina Backslashes
			$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
			return $datos;
		}
		
		@$nombre =filtrado($_REQUEST['nombre']);
		@$comentario =filtrado($_REQUEST['comentario']);
		@$enviar = $_REQUEST['enviar'];
		if ($enviar)
			print("Bien, has pulsado el boton");
		print ("<br>");
		
		$fileName = "ficheros/datos.txt";
		$guiones = str_repeat("-",50);
		$file = @fopen($fileName,"a+") or die('No se ha encontrado el fichero con los datos');
		fwrite($file,$guiones."\n");
		fwrite($file,$nombre."\n");
		fwrite($file,$comentario."\n");
		$datosDF = fread($file, filesize($fileName));
		echo $datosDF;
		?>
		<p>
		Los datos de han cargado correctamente pulse 
		<a href="./ficheros/datos.txt">aqui</a>
		para ver el contenido del fichero
		</p>
		<?php
		fClose($file);
		?>
	</body>
</html>