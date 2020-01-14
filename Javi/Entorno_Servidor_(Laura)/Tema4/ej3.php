<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
    <meta name="author" content="Javier Fernandez">
    <meta name="description" content="Ejercicio 3T4">
  </head>
  <body>
    <!--3. Realizar una función que incremente un número que se le pasa por referencia.-->
    <?php
    function sumaleAlgo(&$valor){
      $valor++;
      }
    $var=1;
    echo "funcion vacia valor 1. </br>";
    echo sumaleAlgo($var);
    echo $var;
    ?>
  </body>
</html>
