<?php
// ****************** compra.php ******************
/*
* 
*/
include 'f_tienda.php'; // incluimos la librería con las funciones auxiliares
comprobarSesion(); // Verificamos que la sesión está activa
$carrito = $_SESSION['carrito']; // Recuperamos el contenido de la variable de sesión y el artículo
$articulo = $_GET['articulo'];
if (empty($carrito[$articulo])) // Incrementamos el número de unidades del artículo elegido
	$carrito[$articulo] = 1;
else
	$carrito[$articulo]++;
	$_SESSION['carrito'] = $carrito; // Guardamos la variable de sesión actualizada

// Por último redirigimos a la tienda
$tienda = dirname('http://' . $SERVER_NAME . $REQUEST_URI) . '/tienda.php';
header("Location: $tienda");
?>