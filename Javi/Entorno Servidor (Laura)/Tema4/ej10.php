<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <meta name="author" content="Javier Fernandez">
    <meta name="description" content="Ejercicio 1T4">
  </head>
  <body>
    <!--1. Definiendo una función, realizar un programa que muestre si un número es par o impar.-->
    <?php
    function espar($numero){
      if ($numero%2==0) {
        echo "El numero ".$numero." es par.</br>";
      } else {
        echo "El numero ".$numero." es impar.</br>";
      }
    }

    ?>
  </body>
</html>
