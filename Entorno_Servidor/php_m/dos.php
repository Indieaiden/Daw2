<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Prueba De Formularios </Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
		$cadena = $_REQUEST['cadcar'];
		print ($cadena);
		print ("<br>");
		$sexo = $_REQUEST['genero'];
		print ($sexo);
		print ("<br>");
		$aditivos = $_REQUEST['aditivos'];
		foreach($aditivos as $aditivo)
			print ("$aditivo <br>");
		/*
		$actualizar = $_REQUEST['actualizar'];
		if($actualizar)
			print("Han sido actualizados los datos");
		print ("<br>");
		*/
		$username = $_REQUEST['username'];
		print ($username);
		print ("<br>");
		$clave = $_REQUEST['clave'];
		print ($clave);
		print ("<br>");
		$enviar = $_REQUEST['enviar'];
		if ($enviar)
			print("el boton de enviar ha sido pulsado");
		print ("<br>");
		$color = $_REQUEST['color'];
		print ($color);
		print ("<br>");
		$idiomas = $_REQUEST['idiomas'];
		foreach($idiomas as $idioma)
			print ("$idioma<br>");
		print ("<br>");
		$comentario = $_REQUEST['comentario'];
		print ($comentario);
		print ("<br>");
		?>
	</body>
</html>
