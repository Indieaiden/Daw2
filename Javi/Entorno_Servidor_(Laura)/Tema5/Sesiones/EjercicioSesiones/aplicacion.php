<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Lee cookie</title>
</head>
<body>

  <?php
  session_start();
  if (isset($_SESSION["usuario"])) {
      echo "Bienvenidx ".$_SESSION["usuario"]." es un pacer tenerte de vuelta<br/>";
  }else{
    echo "Acceso Denegado<br/>";
  }
  if (isset($_POST['atrass'])) {
    setcookie('PHPSESSID','',time()-3600);
    unset($_SESSION['usuario']);
    session_destroy();
    header("Location: login.php");
  }
  ?>
  <form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <button type="submit" name="atrass"><?php if (!empty($_SESSION)){echo "logout";}else{echo "volver";} ?></button>
  </form>
</body>
</html>
