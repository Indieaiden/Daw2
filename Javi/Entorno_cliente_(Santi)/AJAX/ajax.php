<?php
$nombres = array("Javier","Rafael","Lorena","Pablo","Adrian");
$apellidos = array("Fernandez","Ruiz","Beleña","Parra","Pavel");

function tabla($z=1, $x=1){
  if ($z == null) {
    $z=1;
  }
  if ($x == null) {
    $x=1;
  }

echo "<table>";
echo "<tbody>";
echo "<tr>";
echo "<td class=\"thead\">Nombre</td>";
echo "<td class=\"thead\">Apellido</td>";
echo "</tr>";
for ($i=0; $i < $z; $i++) {
  for ($k=0; $k < count($nombres); $k++) {
    echo "<tr>";
    echo "<td>".$nombres[$k]."</td>";
    echo "<td>".$apellidos[$k]."</td>";
    echo "</tr>";
    // code...
  }
}

echo "</tbody>";
echo "</table>";

}
$nombres = array("Javier","Rafael","Lorena","Pablo","Adrian");
$apellidos = array("Fernandez","Ruiz","Beleña","Parra","Pavel");

tabla(3,3);

 ?>
