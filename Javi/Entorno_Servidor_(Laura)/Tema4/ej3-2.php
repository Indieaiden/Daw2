<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
    <meta name="author" content="Javier Fernandez">
    <meta name="description" content="Ejercicio 3T4">
  </head>
  <body>
    <!--3. Realizar una función que incremente un número que se le pasa por referencia
           Y si esta, está vacia te devuelva por defecto un numero.-->
    <?php
    $var=1;
    function sumaleAlgo(&$valor){
      $valor++;
    }
    function sumaleAlgo(){
      static $valorcio = 0;
      return ++$valorcio;
    }
    echo "funcion vacia valor 1. </br>";
    echo sumaleAlgo($var);
    echo $var;
    echo sumaleAlgo();
    echo sumaleAlgo();
    echo sumaleAlgo();
    ?>
  </body>
</html>
