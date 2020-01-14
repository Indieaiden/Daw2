<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Cookie</title>
  </head>
  <body>
    <h4>Eliminamos cookie Saludo = Hola!</h4>
     <form class="cookiess" action="leercookie.php" method="post">
       <input type="submit" name="go" value="ciao bella">
     </form>
     <?php
     setCookie("saludo", "Hola!", time()-1);//elimina la cookie al restar tiempo.
     ?>
  </body>
</html>
