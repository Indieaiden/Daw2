<?php
include_once("header.php");
  ?>

<?php
echo "<link rel=\"stylesheet\" href=\"tabla_estilo.css\">";
echo "<table>";

$color = 0;
$i;
$j;
//Chequeo de error si se envía el formulario


if (isset($_POST['desde'])){
  /*Asignamos a una variable, y restamos
  uno para trabajar con arrays desde la
  posición 1 en lugar de la 0 */
  $desde = $_POST['desde'];
  $desde--;
}
else {
  echo "<p> FORMULARIO NO INTRODUCIDO CORRECTAMENTE</p>";
}

if (isset($_POST['hasta'])) {
  $hasta = $_POST['hasta'];
  $hasta++;
} else {
  echo "<p> FORMULARIO NO INTRODUCIDO CORRECTAMENTE</p>";
}

//Chequeo de error numero primero mas grande que el segundo

if ($_POST['hasta'] < $_POST['desde']) {

}

//Bucle de las filas
for($i=0;$i<=10;++$i){
  echo "<tr>";


  /*Al iniciar una fila nueva, reiniciamos el contador
  para que los colores no queden en columnas, SOLAMENTE
  CUANDO EL NÚMERO DE COLUMNAS ES IMPAR*/
  if (($hasta-$desde)%2!=0) {
    $color = ($color+1)%2;
  }

  //Bucle de las columnas
    for($j=$desde;$j<$hasta;++$j){

      //Posición 00 con una X en rojo
      if ($i==0 && $j==$desde) {
        echo "<td class=\"x_roja\">". "X" ."</td>";
      } elseif (($i==0 || $j==$desde) && !($i==0 && $j==$desde)) {
          //Columnas y filas con los numeros del 1 al 10
          //y el color fijo
          if ($i == 0) {
            echo "<td class=\"fila_0\">". $j ."</td>";
          } else {
            echo "<td class=\"columna_0\">". $i ."</td>";
          }
/*Terminamos con las comprobaciones de las filas y
columnas 00, y empezamos a alternar los colores como un
tablero de ajedrez con una variable de control que, irónicamente
no controla una mierda*/
      }  elseif ($color == true) {
        //Aquí me coloca los td con el color 1
        echo "<td class=\"color_1\">". $i*$j ."</td>";
        $color = ($color+1)%2;


      } elseif ($color == false) {
        //Aquí me pone los td con el color 2
        echo "<td class=\"color_2\">". $i*$j ."</td>";
        $color = ($color+1)%2;

      }
    }
  echo "</tr>";
}
echo "</table>";

 ?>

 <?php
 include_once("footer.php");
   ?>
