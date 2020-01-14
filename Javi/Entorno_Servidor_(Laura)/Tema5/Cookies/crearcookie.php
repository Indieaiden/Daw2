<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Cookie</title>
  </head>
  <body>
    <h4>Creamos cookie Saludo = Hola!</h4>
     <form class="cookiess" action="leercookie.php" method="post">
       <input type="submit" name="go" value="Siguiente">
     </form>
     <?php
     setCookie("saludo", "Hola", time()+20, __DIR__);//creamos cookie con 20 segundos de duracion que solo se lea en este directorio (./Cookies)
     setCookie("despido", "adios", time()+20, __DIR__);//creamos cookie con 20 segundos de duracion que solo se lea en este directorio (./Cookies)
     ?>
  </body>
</html>
