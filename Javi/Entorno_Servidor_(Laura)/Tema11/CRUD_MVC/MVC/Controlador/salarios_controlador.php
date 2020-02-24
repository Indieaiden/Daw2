<?php
require_once("MVC/Modelo/Salarios_modelo.php");
$salario = new Salarios_modelo();
$matrizProductos = $salario->getProductos();
require_once("MVC/Vista/salarios_view.php");
 ?>
