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
if (!isset($_POST['aceptar'])){
?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Usuario:  <input type="text" name="usuario" required="required"><br><br>
	Contraseña: <input type="password" name="contrasena" required="required"><br><br>
	<input type="submit" name="aceptar" value="aceptar">
	</form>

<?php
}

else{
	$usuario = filtrado($_POST['usuario']);
	$contrasena = filtrado($_POST['contrasena']);
	echo "invoca a la función validarUser($usuario, $contrasena);<br>";
	$nivel = validarUser($usuario, $contrasena);
	if($nivel >=0){
		ver2($nivel);
		//poner en una sesion
		session_start();
		$_SESSION['usuario']= $usuario;
		$_SESSION['nivel']=$nivel;
		ver($_SESSION);
		//acceder al menú
		header('Location: menu.php');
	}
	else{
		
		switch ($nivel){
			case ERROR_PASSWORD:
				echo "Error en la password <br>";break;
			case ERROR_EXPIRADO:
				echo "El usuario ya no es válido";break;
			case ERROR_NOREGISTRADO:
				echo "Usuario no registrado";break;
			default:
				echo "Error desconocido";
		}
	}
}
?>


</body>
</html>