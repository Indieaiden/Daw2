<?php
// header("Content-Type: application/json; charset=UTF-8");

$obj_PHP = json_decode($_GET["x"], false);

echo "DNI.- ";
echo $obj_PHP->dni;
echo " ---- Nombre.- ";
echo $obj_PHP->nombre;
?>
