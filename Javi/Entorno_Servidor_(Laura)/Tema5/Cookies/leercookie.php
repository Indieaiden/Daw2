<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Lee cookie</title>
  </head>
  <body>
    <script type="text/javascript">
      document.write(document.cookie+"<br/>");//cookie mostrada en JS
    </script>
    <?php
    if (!empty($_COOKIE)) {
      foreach ($_COOKIE as $key => $value) {
        echo "Done! la cookie ".$key." tiene el valor ".$value.".<br/>";
      }
    }else{
      echo "No hay cookie<br/>";
      echo '<img src="../../../images/cuqui.png" alt="ay mi cuqui"></img>';
      echo '<h1>AY MI COOKIE!</h1>';
    }

    ?>
  </body>
</html>
