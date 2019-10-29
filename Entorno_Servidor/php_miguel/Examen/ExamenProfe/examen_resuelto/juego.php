<!DOCTYPE html>
<html lang="es">
<head>
<title>Laura Pérez</title>
<meta charset="UTF-8">
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<link href="./css/estilos.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
	include_once("./inc/funciones.php");
	include_once("clases.php");
	session_start();
	if (!isset($_SESSION['usuario'])){
		die("no tiene permisos para ejecutar esta página");
	}
	$usu =  $_SESSION['usuario'];
	$pc = "MI PC";

	$baraja = new Baraja();
	$baraja->barajar();
	
//	if (!isset($_POST['aceptar'])){
?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Usuario:  <?php echo  $usu; ?><br><br>
	Máquina: <?php echo $pc; ?><br><br>
	<input type="submit" name="aceptar" value="JUGAR">
	</form>
<?php
//	}
	if (isset($_POST['aceptar'])){
		$cartaUsuario = $baraja->sacarCarta();
		$cartaPc= $baraja->sacarCarta();
		echo "<br>La carta del usuario es: ";
		$cartaUsuario->imprime();
		echo ',  obtiene '.$cartaUsuario->puntos().' puntos <br>';
		echo "<br>La carta del equipo es: ";
		$cartaPc->imprime();
		echo ' , obtiene '.$cartaPc->puntos().' puntos <br>';
		echo "<br>Ha ganado "	;
		echo ($cartaUsuario->puntos()>$cartaPc->puntos())?$usu:$pc;
		echo '<br>';
		//ver($baraja);
	}
?>


</body>
</html>