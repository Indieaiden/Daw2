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
		if(isset($_SESSION['usuario'])){
			echo'Bienvenido '.$_SESSION['usuario'];
		}else{
			?>
			Usted No Deberia estar aqui
			<a href = <?php echo $_SERVER['PHP_SELF'];?>>Entre aquí primero</a> 
			<?php
		}
		?>
	</body>
</html>