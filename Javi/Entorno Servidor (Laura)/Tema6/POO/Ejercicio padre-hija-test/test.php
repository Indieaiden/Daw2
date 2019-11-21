<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>testo!!!</title>
    <meta name="author" content="Javier">
    <meta name="description" content="php test">
  </head>
  <body>
    <?php
      include("padre.php");

      $t1 = new Tiendamusica();
      $t2 = new Tiendamusica("rocK",10);
      $t3 = new Tiendamusica("pop",17,"vinilo");

      echo t1.getStock();
      echo t1.getEstiloMusical();
      echo t2.getStock();
      echo t2.getEstiloMusical();
      echo t3.getStock();
      echo t3.getEstiloMusical();




     ?>
  </body>
</html>
