<?php
require_once("MVC/Modelo/Productos_modelo.php");
$producto = new Productos_modelo();
$matrizProductos = $producto->getProductos();
require_once("MVC/Vista/Productos_view.php");
 ?>
