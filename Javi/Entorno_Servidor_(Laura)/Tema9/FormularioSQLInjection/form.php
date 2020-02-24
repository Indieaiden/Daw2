<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once("ValidarUsuarioPDO.php");
     ?>
    <form class="p" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <label for="usu">usuario:</label>
      <input type="text" id="usu" name="usu"><br>
      <label for="pwd">contraseña:</label>
      <input type="text" id="pwd" name="pwd"><br>
      <input type="submit" name="send" value="send">
    </form>
    <?php
    if (isset($_POST['send'])) {
      $Id = new conectaBD();
      $user = $_POST['usu'];
      $pwd = $_POST['pwd'];
      $consulta = $Id->consulta1("SELECT * from usuario where login='$user' AND clave='$pwd'");//ascendente

      if (!$consulta==1) {
        echo "ACESSO DENEGADO";
      }else{
        echo "BIENVENID@ ".$user;
      }
    }else {
      ?>
      <p>este formularo no tiene seguridad y podems realizar SQL iyection en la contraseña con, por ejemplo > a' OR 1='1 < y haria login</p>
      <?php
    }
    ?>
  </body>
</html>
