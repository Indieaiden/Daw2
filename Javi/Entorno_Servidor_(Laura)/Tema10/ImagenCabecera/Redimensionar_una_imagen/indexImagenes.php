<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Info y resizeado</title>
  </head>
  <body>
    <h1>Info de la imagen</h1>
    <?php
    $fichero = "vaati.gif";
    $tamanio =  getimagesize($fichero);
  ?>
  <pre>
  <?php
    print_r($tamanio);
    ?>
  </pre>
    <?php
     ?>
     <br>
    <img src="imagen.php" alt="ImagenesPHP">
    <h1>RESIZEANDO 50%</h1>

    <img src="imagenDestino.php" alt="ImagenesRedimensionadasPHP">
    </body>
</html>
