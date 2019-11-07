<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      if (isset($_POST['submit'])) {
        // Primero borramos la cookie
        setcookie('nombre', '', time()-100);
        //Luego enviamos a la nueva pagina
        header("Location: login.php");
        exit();
      }

      //Damos la bienvenida en caso de que esté la cookie creada
        if (isset($_COOKIE['nombre'])) {
          $value = $_COOKIE['nombre'];
          echo "<h1> Bienvenido ". $value ." </h1>";
        } else {
          echo "<h1> Acceso prohibido </h1>";
        }

     ?>
     <br>
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
       <button type="submit" name="submit">Borrarcookie</button>
     </form>

     <?php

      ?>
  </body>
</html>
