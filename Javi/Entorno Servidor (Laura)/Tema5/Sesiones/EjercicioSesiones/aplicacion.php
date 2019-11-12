<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Lee cookie</title>
</head>
<body>

  <?php
  session_start();
<<<<<<< HEAD
  if (isset($_SESSION["usuario"])) {
=======

  if (isset($_POST["go"])) {
>>>>>>> b7e56b8a6dd3960d2d0661293f41d4313ddcae06
      echo "Bienvenidx ".$_SESSION["usuario"]." es un pacer tenerte de vuelta<br/>";
  }else{
    echo "Acceso Denegado<br/>";
  }
  if (isset($_POST['atrass'])) {
    setcookie('PHPSESSID','',time()-3600);
    $_SESSION = array();
    header("Location: login.php");
  }
  ?>
  <form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <button type="submit" name="atrass"><?php if (!empty($_SESSION)){echo "logout";}else{echo "volver";} ?></button>
  </form>
</body>
</html>
