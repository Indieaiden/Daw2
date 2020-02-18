<?php
// sleep(3);
//echo ('DNI.- ' . '12345678 A' .
//      ' --- Nombre.- ' . 'Pepe'
//     );
//echo "Pepe";

$obj_PHP = json_decode($_POST["x"], false);

echo "DNI.- ";
echo $obj_PHP->dni;
echo " ---- Nombre.- ";
echo $obj_PHP->nombre;
echo "<br><br>";
?>
