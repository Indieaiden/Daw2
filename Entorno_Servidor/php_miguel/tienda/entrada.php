<!DOCTYPE html>
<?php
include 'f_tienda.php'; // incluimos la librería con las funciones auxiliares
session_start();  //Iniciamos la sesión
$_SESSION['carrito'] = array(); // Inicializamos la variable de sesión del carrito
 //- Si método GET - Mostramos el formulario Si método POST - Procesamos el formulario
if ($_SERVER['REQUEST_METHOD'] == 'GET'){//  Mostrar formulario
	$contenido ='
	<h1> Entrada a MiTienda</h1>
	<form action="entrada.php" method="POST">
	<table summary ="entrada sistema"  class="entrada">
	<tr><td>Usuario</td> <td><input type="text" name="usuario" width="10"> </td></tr>
	<tr><td>Contraseña</td>  <td><input type="password" name="pclave" width="10"></td></tr>
	<tr><td><input type="submit" value="Enviar Formulario"></td>
	<td><input type="reset" value="Borrar Formulario"> </td></tr>
	</table>';
}
else { //Procesar formulario
 	if (validar($_POST['usuario'], $_POST['pclave'])){  //Comprobamos si OK nombre de usuario y contraseña
		$_SESSION['usuario'] = $_POST['usuario']; // guardamos nombre de usuario en una variable de sesión
		 //Generamos la salida
		$contenido ="<h1>Bienvenido $_POST[usuario]<h1>
				<p>Pulsa <a href=\"tienda.php\">aquí</a> para continuar...</p>";	
	}
	else { // El nombre de usuario o la contraseña no son correctos
		 $contenido ="
		<h1>Error nombre de usuario o contraseña incorrectas</h1>
		<p >Pulsa <a href=\"entrada.php\"aquí</a> para continuar...</p>";
	}
}
?>
<html>
<head> <title>PHP entrada.php</title>
		<meta charset = "UTF-8"/>
</head>
<body>
<?php echo $contenido; ?>
</body>
</html>