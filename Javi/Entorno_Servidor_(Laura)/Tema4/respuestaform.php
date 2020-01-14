<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="respuesta formulario">
    <meta name="author:" content="Javier Fernandez">
    <title>X</title>
  </head>
  <body>
    <?php
      $valor = $_POST["opciones"];
      if ($valor=="o1") {
        echo strlen($_POST["testo"]);
      } else if ($valor=="o2") {
        echo ("¡¡".strtoupper($_POST["testo"])."!!");
      }else if ($valor=="o3"){
        echo ucwords($_POST["testo"]);
      }

    ?>
  </body>
</html>
