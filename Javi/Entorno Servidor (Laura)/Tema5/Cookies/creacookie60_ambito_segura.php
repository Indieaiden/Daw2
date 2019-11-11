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
     setCookie("saludo", "Hola", time()+20, __DIR__,"localhost",true);//creamos cookie con 20 segundos de duracion que solo se lea en este directorio (./Cookies)
     //tambien le damos el host, con nuestro localhost y true para navegacion segura a traves de https:
     ?>
  </body>
</html>
