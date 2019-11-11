<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
    <meta name="author" content="Javier Fernandez">
    <meta name="description" content="Ejercicio 2T4">
  </head>
  <body>
    <!--2. Modificar el ejercicio anterior para que admita un número variable de argumentos.-->
    <?php
    function espar ($numero){
      $numeros = func_num_args();
      for ($i=0 ; $i < $numeros; $i++) {
        if(func_get_arg($i) %2 ==0) {
          echo "El numero ".func_get_arg($i)." es par</br>";
        } else {
          echo "El numero ".func_get_arg($i)." es impar</br>";
        }
      }
    }
    espar(1,2,3,4,5,6);
    ?>
    <?php  ?>
  </body>
</html>
