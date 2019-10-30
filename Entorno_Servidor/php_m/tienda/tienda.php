<?php

// ****************** tienda.php *****************
/*
* Verifica que la sesión está activa, muestra los artículos disponibles, y 
* muestra el contenido del carrito. Cada artículo tiene un enlace al script 
* compra.php, que es el encargado de añadirlo al carrito de la compra. Por 
* último, hay un enlace al script caja.php, para finalizar la compra.Los 
* enlaces generados para cada artículo son del tipo: compra.php?articulo=ref15 
* Cada uno de estos enlaces envía en la cadena de la consulta (query string)
*  un identicador único con el código de referencia del artículo
*/
include "f_tienda.php"; // incluimos la librería con las funciones auxiliares
comprobarSesion(); // Verificamos que la sesión está activa
?>
<html>
<head> <title> tienda.php </title></head>
<body>
<h1 align="center">Mi Tienda</h1>
<?php
articulos(); // Mostramos los artículos disponibles
echo "<hr />\n";
mostrar_carrito() // y el contenido del carrito
?>
<hr />
<p align="center"><a href="caja.php">Pasar por caja</a></p>
</body>
</html>