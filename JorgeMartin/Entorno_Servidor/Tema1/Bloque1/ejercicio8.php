<?php
$constantes = get_defined_constants();
foreach ($constantes as $clave => $valor) {
  echo $clave . " -> " . $valor . " <br> ";
}

?>
