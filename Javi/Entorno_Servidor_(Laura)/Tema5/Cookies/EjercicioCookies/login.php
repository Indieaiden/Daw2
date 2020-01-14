<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Cookie</title>
  <meta name="author" content="Javier Fernandez">
  <meta name="Description" content="XxX">
  <style media="screen">
  .imp{
    color: red;
  }
  </style>
</head>
<body>
  <h2>Acceso de usuario</h2>
  <?php
  if (isset($_POST['go'])) {
    $user=$_POST["usuario"];
    $pwd=$_POST["pwd"];
    if (strlen($pwd) <= 5) {//valida si la contraseña tiene 6 caracteres
      echo "<h3 class=\"imp\">La contraseña debe de tener al menos 6 caracteres.</h3>";
    } else if (strlen($user)<5) {//valida si el nombre de usuario tiene 5 caracteres
      echo "<h3 class=\"imp\">Ningun nombre de usuario tiene menos de 5 caracteres, revisalo.</h3>";
    } else {
      setcookie("usuario",$user,time()+3600);//caduca al dia (24 horas)
      header("location: aplicacion.php");
    }
  }
  ?>
  <form class="cookiess" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    Usuario: <input type="text" name="usuario" placeholder="Escribe tu nombre de usuario" <?php if(isset($_POST["usuario"])){ echo ("value = \"".$_POST["usuario"]."\""); } ?> ><br>
    Password: <input type="password" name="pwd"><br><br>
    <input type="submit" name="go" value="Siguiente">
  </form>

</body>
</html>
