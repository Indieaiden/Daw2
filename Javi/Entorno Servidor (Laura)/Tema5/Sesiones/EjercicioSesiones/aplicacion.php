<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Lee cookie</title>
</head>
<body>
  <?php
  if (isset($_SESSION["go"])) {
    echo "Bienvenidx ".$_COOKIE['usuario']." es un pacer tenerte de vuelta<br/>";
  }else{
    echo "Acceso Denegado<br/>";
  }
  if (isset($_POST['atrass'])) {
    header("Location: login.php");
  }
  ?>
  <form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <button type="submit" name="atrass">logout</button>
  </form>
</body>
</html>
