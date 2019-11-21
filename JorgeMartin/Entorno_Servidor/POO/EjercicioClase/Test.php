<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once("ClasePadre.php");
    include_once("ClaseHija.php");

    $equipobase = array(

    );
    $statsbase = array(1,4,5,7);

    $heroe1 = new Heroe(100, $statsbase, '', $equipobase);
    $heroe2 = new Heroe(125, $statsbase, 'Hehe', $equipobase);
    $heroe3 = new Heroe(500, $statsbase, 'Bienvenido a la vida', $equipobase);

    $heroe1->ModificarVida(400);
    $heroe2->ModificarVida(100);
    $heroe2->DecirFrase();
    $heroe3->DecirFrase();
    $heroe2->IniciarStats("Warrior");
     ?>
  </body>
</html>
