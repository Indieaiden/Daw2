<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Detalles</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<h2>Informe sobre el comentario.</h2>
		<?php
			echo "Longitud:  "	.strlen($_POST['comentario']);
			echo "<br>";
			echo "Nº de palabras ". str_word_count($_POST['comentario'],0);
			echo "<br>";
			echo "Letra mas repetida  (a) ". substr_count($_POST['comentario'],'a');
			echo "<br>";
			echo "Palabra mas repetida  (al) ". substr_count($_POST['comentario'],'al');
			echo "<br>";
			echo "<input type='button' value='volver' onClick='history.back()'/>";
		?>
		
	</body>
</html>