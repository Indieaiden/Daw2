<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    public function SalirPagina()
    {
      // Primero borramos la cookie
      setcookie('nombre', '', time()-1);
      //Luego enviamos a la nueva pagina
      //-----------NO SÉ CÓMO, PREGUNTAR------------
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
     <form action="<?php echo SalirPagina();?>" method="post">
       <button type="submit" name="submit">Borrarcookie</button>
     </form>

     <?php

      ?>
  </body>
</html>
