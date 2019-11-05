<?php include_once("header.php"); ?>

<?php
$nombre = "cookie1";
$valor = "valor_cookie";
$expire = 100;
$path = "?";
$domain = "localhost";
$secure = true;
$httponly = false;

if (setcookie($nombre, $valor)) {
echo "Se ha creado la cookie ".$nombre." con valor: ".$valor;
}
else {
  echo "No se ha podido crear la cookie";
}
 ?>

<?php include_once("footer.php"); ?>
