<?php
// ---------------------------------------- informacion.php ----------------------------------
session_start();
if ( isset( $_GET['terminar_sesion'] ) ) {
	$_SESSION=array() ; //Borramos todas las variables de la sesión
	setcookie('PHPSESSID','',time()-3600); //Caducamos la cookie
	session_destroy(); // destruimos los datos de la sesión en el script actual
	header('Location: acreditacion.php'); //redirigimos a la página de acreditación
}
if ( !isset( $_SESSION['permiso'] )){
	header('Location: acreditacion.php');
}
echo '<a href="informacion.php?terminar_sesion=1">Terminar sesion</a><br />';
echo '<a href="http://www.google.es">GOOGLE</a><br />';
echo '<a href="transferencia.php">Realizar transferencia</a><br />';
?>