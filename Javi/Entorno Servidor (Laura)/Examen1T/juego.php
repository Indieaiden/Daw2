<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Lets Play!</title>
  <meta name="author" content="Javier Fernandez Navarro">
  <meta name="description" content="ejercicio 3 examen">
</head>
<body>
  <?php
  //include    //ver mas adelante para incluir todo
  session_start();

  /*
  Crea la página php: juego.php
  a) recibe la información del juego en la sesión.
  Las reglas del juego son (suponiendo que jugamos con los valores por defecto):
  b) Simultáneamente, los dos jugadores muestran 3 cartas al azar.
  c) Si un jugador obtiene más de la suma total del juego, 15, pierde.
  d) El jugador que saque el valor más alto (sin pasarse de 15), gana.
  e) El programa tendrá una sola página. Cada vez que se carga la página:
  f) Se muestra la jugada de cada jugador (3 cartas del 1 al 10)
  g) se indica qué jugador ha ganado.
  h) Se acumulan los puntos
  i) y se calcula el total acumulado en euros, lo que uno gana el otro lo pierde.
  j) utilizar las clases del ejercicio 2.
  k) No permitir continuar el juego si un jugador se ha quedado sin presupuesto
  */
  include 'clases.php';
  session_start();
  function jugar(){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
      <input type="submit" value="jugar" name="jugar">
      <?php
    }

    if(isset($_SESSION["enviado"])){
      //creamos la baraja segun el numero de cartas que vayamos a querer del formularioanterior
      if(isset($_SESSION["baraja"])){
        $baraja=($_SESSION["baraja"]);
      }else{
        $baraja= new Baraja($_SESSION["numCartas"]);
        $baraja->barajar();
        $_SESSION["baraja"]=$baraja;
      }




    }else{
      echo "ACCESO DENEGADO<br>";
      ?>
      <a href="inicio.php">Ir al inicio</a>
      <?php
    }
    ?>
  </body>
  </html>
