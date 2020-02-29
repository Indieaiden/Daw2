<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Lee cookie</title>
</head>
<body>
  <?php
  session_start();
  if (isset($_COOKIE) && !empty($_COOKIE)) {//comprobamos si la cookie está creada
      echo "Bienvenidx ".$_COOKIE['usuario']." es un pacer tenerte de vuelta<br/>";
  }else{
    echo "Acceso Denegado<br/>";
  }
  if (isset($_POST['atrass'])) {
    setcookie("usuario",$user,time()-1);//caduca al mes (30 dias)
    header("Location: login.php");
  }
  ?>
  <form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <button type="submit" name="atrass"><?php if (!empty($_COOKIE)){echo "logout";}else{echo "volver";} ?></button>
  </form>
</body>
</html>
