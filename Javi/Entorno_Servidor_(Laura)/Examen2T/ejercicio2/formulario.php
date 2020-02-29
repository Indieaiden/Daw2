<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>TRASTEAR CON IMAGENES</title>
  </head>
  <body>
    <?php
    $id = 1;
    $directorioscan= scandir("./NatureModif/");//escaneamos el directorio images
    $init=2;//variable que utilizaremos para iniciar el array del directorio en 2 para que no cuente el directiorio actual y el directorio padre
    for ($y=0; $y < (count($directorioscan)-2)/2; $y++) {//idea, introducir numeros

    }
      ?>
      <form class="animales" action="imagenFinal.php" method="get">
      <?php
    echo "<table>";
    echo "<caption> SELECCIONA UNA IMAGEN</caption>";
    for ($x=0; $x < (count($directorioscan)-2)/2; $x++) {//for para recorrer el array de las fotos (Tengo la imagen)
      echo "<tr>";
      for ($i=0; $i < 2; $i++) {//array para limitar tablas 4 columnas (pinto la fila)
        echo "<td>";
        if ($init<count($directorioscan)) {//comprueba el contador contra el contenido del directorio y columnas
          echo '<img src="NatureModif/'.$directorioscan[$init].'" alt = '.$directorioscan[$init].' width="200" height="100">';
          $init++;//suma a init(contador), para que siga añadiendo los indices del array y no vuelva a contar desde el principio
          $id++; //Cambiador de ID para la imagen
        }
        echo "</td>";
      }
      echo "</tr>";
    }

    echo "</table>";

    ?>
    <input type="text" name="numimagen" placeholder="selecciona imagen a modificar(1-5)" size="40"><br>
    <label for="cam">Cambios a realizar: </label>
    <input type="radio" name="forma" value="h">Horizontal
    <input type="radio" name="forma" value="v">Vertical
    <input type="radio" name="forma" value="a">Ambos
    <input type="radio" id="cam" name="forma" value="n" <?php if(empty($argumentos['go'])){ echo 'checked="checked"';} ?>>Ninguno <br>

    <input type="submit" name="go" value="Realizar los cambios">
    </form>

    <?php



     ?>
  </body>
</html>
