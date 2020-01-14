<?php
$nombres = array("Javier","Rafael","Lorena","Pablo","Adrian");
$apellidos = array("Fernandez","Ruiz","Beleña","Parra","Pavel");

function tabla($z, $x){
  if ($z == null) {
    $z=1;
  }
  if ($z == null) {
    $z=1;
  }

echo "<table>";
echo "<tbody>";
for ($i=0; $i < $z; $i++) {
  echo "<tr>";
  echo "<td class=\"thead\">Nombre</td>";
  echo "<td class=\"thead\">Apellido</td>";
  echo "</tr>";
}

echo "</tbody>";
echo "</table>";

}
tabla();

 ?>
