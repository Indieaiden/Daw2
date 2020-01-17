<?php
$nombres = array("Javier","Rafael","Lorena","Pablo","Adrian");
$apellidos = array("Fernandez","Ruiz","Beleña","Parra","Pavel");

function tabla(){
  GLOBAL $nombres;
  GLOBAL $apellidos;


  echo "<table>";
  echo "<tbody>";
  echo "<tr>";
  echo "<td class=\"thead\">Nombre</td>";
  echo "<td class=\"thead\">Apellido</td>";
  echo "</tr>";
  for ($i=0; $i < 1; $i++) {
    for ($k=$_GET["init"]-1; $k < $_GET["end"]; $k++) {
      echo "<tr>";
      echo "<td>".$nombres[$k]."</td>";
      echo "<td>".$apellidos[$k]."</td>";
      echo "</tr>";
      // code...
    }
  }
}
tabla();
?>
