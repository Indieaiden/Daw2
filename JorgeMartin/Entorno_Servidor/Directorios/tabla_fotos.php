<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TituloProvisional</title>
    <style media="screen">
      table{
      width: 50%;
      height: 50%;
      }
      table, td, tr {
        border: 1px solid black;
      }

      img {
        height: 400px;
        width: 250px;
      }
    </style>
  </head>
  <body>
    <?php
    function recogerFotos ($directorio, &$cociente) {
        $fotos = scandir($directorio, 1);
        //Entrar en el directorio fotos y contar cuantas hay. Dividir entre cuatro y poner al primer el bucle
        //el cociente
        $num_fotos = sizeof($fotos)-2; //Le quitamos el . y el ..
        $cociente = $num_fotos/4;
        $cociente = ceil($cociente); //En caso de que sea decimal, sumamos uno

        return $fotos;
    }
      /*17.Hacer un programa que muestre en una tabla de 4 columnas todas las
imágenes de el directorio "fotos". Para ello consulte el manual (en
concreto la referencia de funciones de directorios). Suponga que en el
directorio sólo existen fotos y que ese directorio está en la misma
carpeta que el php.*/

    $cociente = 0;
    $ruta = getcwd()."/fotos";
    $fotos = recogerFotos($ruta, $cociente); //Lo hago con una funcion porque habra que hacer comprobaciones más adelante

    print_r($fotos);

    $control = 0;

    echo "<table>";
    for ($i=0; $i<$cociente ; $i++) { //Bucle que mira cuántas filas tiene la tabla
        echo "<tr>";
      for ($j=0; $j<4; $j++) {
        //Pintar las columnas (siempre 4);
        echo "<td><img src=\""."./fotos/". $fotos[$control] ."\" alt=\"NohayImagen\"></td>";
        if ($control < sizeof($fotos)-2){
          $control++;
        }
      }
      echo "</tr>";
    }
  echo "</table>";
     ?>
  </body>
</html>
