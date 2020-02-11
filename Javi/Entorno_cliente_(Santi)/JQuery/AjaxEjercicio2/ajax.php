<?php
$nombres = array("Javier","Rafael","Lorena","Pablo","Adrian");
$apellidos = array("Fernandez","Ruiz","Beleña","Parra","Pavel");
sleep(3);//hace que el php tarde 3 segundos para hacer las pruebas correspondientes en jquery
function tabla(){
  GLOBAL $nombres;
  GLOBAL $apellidos;
  $init = $_POST['init']-1;
  $fin = $_POST['end'];


  echo "<table>";
  echo "<tbody>";
  echo "<tr>";
  echo "<td class=\"thead\">Nombre</td>";
  echo "<td class=\"thead\">Apellido</td>";
  echo "</tr>";
  for ($i=0; $i < 1; $i++) {
    for ($k=$init; $k < $fin; $k++) {
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
