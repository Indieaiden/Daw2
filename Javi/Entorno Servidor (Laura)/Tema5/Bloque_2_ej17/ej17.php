<!DOCTYPE html>
<html lang="es">
<head>
  <title> PHP: ej17 </title>
  <meta name="author" content="Javier">
  <meta name="description" content="Programa que muestre en una tabla de 4 columnas todas las imágenes de el directorio 'fotos'. Para ello consulte el manual (en concreto la referencia de funciones de directorios). Suponga que en el directorio sólo existen fotos y que ese directorio está en la misma carpeta que el php">
  <style media="screen">
    td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <!--bucle for {si array == "String" echo chkd or slc} -->
  <?php
  $directorioscan= scandir("./imagenes/");//escaneamos el directorio images
//  print_r ($directorioscan);
  /* $rest = substr("abc.gif", -3); // devuelve "gif"
  echo "<br>".$rest; */
  $init=2;//variable que utilizaremos para iniciar el array del directorio en 2 para que no cuente el directiorio actual y el directorio padre
  echo "<table>";//tabla
  for ($x=0; $x < (count($directorioscan)-2)/4; $x++) {//for para recorrer el array de las fotos (Tengo la imagen)
    echo "<tr>";
    for ($i=0; $i < 4; $i++) {//array para limitar tablas 4 columnas (pinto la fila)
      echo "<td>";
      if ($init<count($directorioscan)) {//comprueba el contador contra el contenido del directorio y columnas
        echo '<img src="imagenes/'.$directorioscan[$init].'" alt = "imagen_'.$i.'" width="200">';
        $init++;//suma a init(contador), para que siga añadiendo los indices del array y no vuelva a contar desde el principio
      }
      echo "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
  ?>
</body>
</html>
