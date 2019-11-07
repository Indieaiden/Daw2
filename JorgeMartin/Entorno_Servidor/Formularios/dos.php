<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_POST['enviar'])){

    /*----------APLICACIÓN-----------*/

      echo $_POST['nombre'];
      echo "<br/>";
      echo $_POST['contrasena'];
      echo "<br/>";

      if (isset($_POST['animal']) ){
        $variable = $_POST['animal'];
        echo (implode(",",$variable));
        echo "<br/>";
      }
      if (isset($_POST['idioma']) ){

        echo (implode(",",$_POST['idioma']));
        echo "<br/>";
      }
      if (isset($_POST['genero']) ){

        echo (implode($_POST['genero']));
      }
    } //Endif ISSET
     ?>
  </body>
</html>
