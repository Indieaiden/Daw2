<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Subida archivos</title>
    <meta name="author" content="Javieer Fernandez">
    <meta name="description" content="pueba subida archivos">
  </head>
  <body>
    <?php
      if (isset($_POST["gotcha"])) {//comprieba si hay archivo
        if (is_uploaded_file($_FILES["pepe"]["tmp_name"])) {
          $nombreDir="pruebarchivo/";//nombre del directorio
          $nombreFich=$_FILES["pepe"]["name"];//variable que adquiere el singn del nombre del archivo subido
          $nombreTmp= $nombreDir.$nombreFich;//nombre para dar al archivo temporal
          if (is_file($nombreTmp)) {//comprobar si ya existe el fichero
            $fechaArch= time();//si existe el fichero le añade fecha al nombre para diferenciarlos
            $nombreTmp= $fechaArch."_".$nombreTmp;
          }
          move_uploaded_file($_FILES["pepe"]["tmp_name"],$nombreDir.$nombreFich);
        }else{
          print("No se ha podido subir el archivo\n");
        }
      }else {
      ?>
        <form action='<?php echo $_SERVER["PHP_SELF"];?>' ENCTYPE="multipart/form-data" method="post">
          <input type="file" name="pepe"><br>
          <button type="submit" name="gotcha">Enviar</button>
        </form>
    <?php
      }
    ?>

  </body>
</html>
