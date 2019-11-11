<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Mensajes Foro </title>
  <meta name="author" content="Javi">
  <meta name="description" content="Ejercicio 5 Tema 4 FORO - Mensajes">
  <style media="screen">
  form{text-align: center;}
  td.label{text-align: right;}
  table{border: 1px solid black;}
  .imp{color: red;}
  </style>
</head>
<body>
  <?php
  if (isset($_POST["mensajes"])) {
    if(!(strlen($_POST["pwd"])<=4)) {
      if($_POST["pwd"]==strrev($_POST["usuario"])){
          ?>
          <input type="hidden" name="usuario" value="<?php echo $_POST["usuario"] ;?>">
          <input type="hidden" name="pwd" value="<?php echo $_POST["pwd"] ;?>">
          <form class="form" action="zzz.php" method="post">
            <table>
              <caption>BIENVENIDO AL FORO USUARIO <?php echo "ID: ".strlen($_POST["pwd"]).((strlen($_POST["pwd"])*2)+strlen($_POST["usuario"])*3) ?><br></caption>
              <tr>
                <td colspan="3"><p>por favor, indique el tema sobre el que realiza<br>su comentario, gracias.</p></td>
              </tr>
              <tr>
                <td><label class="label" >Tema:</label></td>
                <td><input type="text" name="titulo" placeholder="Nombre de usario"></td>
              </tr>
              <tr>
                <td colspan="3"><textarea name="texto"  placeholder="Escribe tu comentario aquí" rows="3" cols="38"></textarea></td>
              </tr>
              <tr>
                <td> <input type="submit" name="send" value="Envio"></td>
                <td> <input type="reset" name="delete" value="Nueva Opinion"></td>
                <td> <input type="submit" name="logout" value="Terminar"></td>
              </tr>
            </table>
          </form>
          <?php
      }else{
        ?>
        <h3 class="imp">Contraseña errónea</h3>
        <h4>Por favor, vuelva al inicio de sesión e intentelo de nuevo</h4>
        <form class="backform" action="login.php" method="post">
          <input type="submit" name="backlogin" value="Volver">
        </form>
        <?php
      }
    }else{
      ?>
      <h3 class="imp">Constraseña demasiado corta</h3>
      <h4>Debe de tener al menos 5 caracteres.</h4>
      <h4>Por favor, vuelva al inicio de sesión e intentelo de nuevo</h4>
      <form class="backform" action="login.php" method="post">
        <input type="submit" name="backlogin" value="Volver">
      </form>
      <?php
    }
  }
  ?>
</body>
</html>
