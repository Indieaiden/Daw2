<?php
//vamos a probar si existe la funcion max() como en sqlserver
$texto = "En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero";

$indice = "";
$letras = array();//array que recogerá el numero de letras
for ($i=0; $i < strlen($texto); $i++) {
  $indice = strtolower(substr($texto, $i, 1));
  $letras [$indice] = (mb_substr_count($texto,strtolower(substr($texto, $i, 1)))) ;
}

echo max($letras)."<br>";
echo min($letras)."<br>";
print_r($letras);

?>
