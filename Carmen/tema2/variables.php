<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Página</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php
			$a= 1;
			$b = 2;
			function suma(){
				$GLOBALS['b']= $GLOBALS['a'] + $GLOBALS['b'];
			}
			suma();
			echo $b."<br>";
			print_r($GLOBALS);
			echo "<br>";
			$a = "hola";
			$$a = "mundo";
			echo $a." ".$$a."<br>";
			echo "$a ${$a} <br>";
			
			$ms ="Adios";
			$Adios = "chao";
			echo $Adios."<br>";
			
			$msg_en = "Hello ";
			$msg_es = "Hola ";
			$msg_ge = "Hallo ";
			$msg_ch = "Nihao ";
			$msg_fr = "Salut ";
			
			$idioma = $_GET['idioma'];
			
			$saludo = "msg_$idioma";
			echo " ${$saludo}<br>";
			//http://localhost/tema2/variables.php?idioma=fr
		?>
	</body>
</html>