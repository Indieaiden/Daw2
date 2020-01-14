<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="respuesta formulario una.php">
    <meta name="author:" content="Javier Fernandez">
    <title>Dos2</title>
  </head>
  <body>
    <?php

      foreach ($_POST as $clave => $valor) {
        if (is_array($_POST[$clave])) {
          foreach ($_POST[$clave] as $clavedos => $valordos) {
            echo $clavedos." => ".$valordos.", ";
          }
        }else {
          echo $clave." => ".$valor;
        }
        echo "<br>";
      }

    ?>
  </body>
</html>
