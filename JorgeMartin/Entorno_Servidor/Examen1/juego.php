<?php
include_once("clases.php");
session_start();

if (isset($_SESSION['nombre_juego'])){ // No está acreditado
  $ruta = getcwd()."/img";
  //Declaracion de variables
  $nombre_juego = $_SESSION['nombre_juego'];
  $config = $_SESSION['config'];
  $player1 = $config['player1'];
  $player2 = $config['player2'];
  $ncartas = $config['ncartas'];
  $ncartas_part = $config['ncartas_part'];
  $total = $config['total'];
  $euros = $config['euros'];
  $presupj1 = $config['presupj1'];
  $presupj2 = $config['presupj2'];
  $mazo = new Mazo($ruta, $ncartas);
  $mazo->baraja();
  //¿Simultaneo?
  $cartas_1 = $mazo->da_cartas($ncartas_part);
  $cartas_2 = $mazo->da_cartas($ncartas_part);
  $puntosp_j1;
  $puntosp_j2;
  $totalj1 = 0;
  $totalj2 = 0;
  $j1gana;
  $j2gana;

  foreach ($cartas_1 as $key => $carta) {
    $totalj1 += $carta->puntos_carta();
  }

  foreach ($cartas_2 as $key => $carta) {
    $totalj2 += $carta->puntos_carta();
  }


  if($totalj1>$total){
    $j1gana = false;
  }
  else {
    $j1gana = true;
  }

  if($totalj2>$total){
    $j2gana = false;
  }
  else {
    $j2gana = true;
  }

   ?>
   <!DOCTYPE html>
   <html lang="en" dir="ltr">
     <head>
       <meta charset="utf-8">
       <title></title>
     </head>
     <body>
       <h1>Jugador 1:</h1>
       <?php foreach ($cartas_1 as $key => $carta) {
         echo $carta->img_carta();
       }  ?>
       <h1>Jugador 2:</h1>
       <?php foreach ($cartas_2 as $key => $carta) {
         echo $carta->img_carta();
       }  ?>

       <?php if ($presupj1 < 0 || $presupj2 < 0) {
         echo "No se puede seguir jugando";
       } else {
         if ($j1gana && $j2gana) {
           echo "Empate";
         } elseif ($j1gana) {
           echo "J1 gana con".$totalj1." puntos";
           $presupj1 += $euros;
           $presupj2 -= $euros;
         }
         elseif ($j1gana) {
           echo "J2 gana con".$totalj2." puntos";
           $presupj2 += $euros;
           $presupj1 -= $euros;
         } else {
           echo "Ambos pierden";
         }

         $config['presupj1'] = $presupj1;
         $config['presupj2'] = $presupj2;
         $_SESSION['config'] = $config;

       }
     } else {
       echo "<h1>No tienes acceso</h1>";
     } ?>
     </body>
   </html>
