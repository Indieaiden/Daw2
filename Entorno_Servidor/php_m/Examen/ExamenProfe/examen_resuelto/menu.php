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
include_once './inc/funciones.php';
session_start();
if (isset($_SESSION['usuario'])){
	$usuario = $_SESSION['usuario'];
	$nivel = $_SESSION['nivel'];
	echo "<h2> Bienvenido $usuario </h2>";
}else{
	die( "No tiene permisos para acceder a esta página");
}

if (!isset($_POST['aceptar'])){
?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Elige una opción
	1. Juego de cartas:  <input type="radio" name="opcion" value="1. Juego de cartas"><br><br>
	<?php if($nivel == ADMINISTRADOR){?>
	2. Chat:  <input type="radio" name="opcion" value = "2. Chat"><br><br>
	<?php }?>
	3. Salir <input type="radio" name="opcion" value = "3. Salir"><br><br>
	<input type="submit" name="aceptar" value="aceptar">
	</form>

<?php
}

else{
	ver($_POST);
	$opcion = $_POST['opcion'];
	registro_log($usuario, time(), $opcion );
	switch ($opcion){
		case 1: 
			header("Location:juego.php");
			break;
		case 2:
			header("Location:chat.php");
			break;
		case 3:
			session_destroy();
			header("Location:index.php");
			break;
	}
}
?>


</body>
</html>