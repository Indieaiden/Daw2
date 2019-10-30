<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Sesion contador</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
		session_start();
		echo session_id().'<br>';
		echo session_name().'<br>';
		if(!isset($_SESSION['contador'])){
			$_SESSION['contador']=0;
		}
		$_SESSION['contador']++;
		?>
		<a href="contador2.php"> Pagina que muestra el contador </a>
	</body>
</html>