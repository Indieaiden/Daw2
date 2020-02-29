<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>¡Vamos a Jugar!</title>
  <meta name="author" content="Javier Fernandez Navarro">
  <meta name="description" content="ejercicio 1 examen">
  <style>
  .aviso{
    color: red;
  }
  </style>
</head>
<body>
  <?php

  //include clases.php;
  session_start();



  /*
  inicio.php
  a) formulario de entrada con los siguientes valores:
   nombre del juego: deberá ser una cadena sin espacios en blanco. *
   nombre de cada jugador: deberá tener más de 3 caracteres. *
   cantidad de cartas por palo (corazones, diamantes, picas, tréboles) : 7 o 10. Por defecto 10. Es la cantidad de cartas que tiene cada palo
  de la baraja. *
   cartas: ( número de cartas por partida ) De 2.. 5. Por defecto 3. Es la cantidad de cartas que sacará cada jugador. *
   total: ( suma total máxima del juego ): cantidad que deben sumar las cartas, número entero positivo. Por defecto 15. Es la cantidad de puntos
  que como máximo deben sumar las cartas obtenidas por el jugador para no perder. *
   euros por partida: número entero positivo superior a 0. Por defecto 5. Son los euros que se apuestan en cada partida.*
   presupuesto por jugador: cantidad de euros inicial que aporta cada jugador. Los dos jugadores aportan la misma cantidad. *
  b) Crear un formulario de entrada donde se introduzcan los datos,
  c) Comprobar si se han dado los valores correctos, e indicar el error específico en cada caso. Si las comprobaciones son correctas
  se inicia el juego.
  d) Utilizar sesiones para acceder, donde estará cargado el nombre del juego,
  e) y un array con el resto de los parámetros del juego.
  f) Acceder a la página juego.php
  */
  function filtrado($datos){
    $datos= trim($datos); //Elimina espacios
    $datos= stripslashes($datos); //Elimina el caracter \
    $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
    return $datos;
  }
  function pintaFormulario() {

    $argumentos = 0;

    if(func_num_args() > 0) {
      $argumentos = func_get_arg(0);
    }

    ?>
    <form action='<?php echo $_SERVER["PHP_SELF"];?>' method="POST"><!--formulario-->
      <label for="nombreJuego">Nombre Juego: </label><input type="text" name="nombreJuego" placeholder="Sin espacios en blanco..." <?php if(isset($argumentos['nombreJuego'])) {echo "value = " . $argumentos['nombreJuego'];} ?>> <br>
      <label for="jugador1">Nombre Jugador 1: </label><input type="text" name="jugador1" placeholder="Jugador 1..." <?php if(isset($argumentos['jugador1'])) {echo "value = " . $argumentos['jugador1'];} ?>> <br>
      <label for="Jugador2">Nombre Jugador 2: </label><input type="text" name="Jugador2" placeholder="Jugador 2..." <?php if(isset($argumentos['Jugador2'])) {echo "value = " . $argumentos['Jugador2'];} ?>> <br>
      <label for="numCartas">Número de cartas: </label><br>
      <input type="radio" name="numCartas" value="7" <?php if($argumentos['numCartas'] == "7"){ echo 'checked="checked"';} ?>>7
      <input type="radio" name="numCartas" value="10" checked="checked">10<br>
      <label for="cartasSacar">Número de cartas asacar por partida:</label><br>
      <input type="radio" name="cartasSacar" value="2">2
      <input type="radio" name="cartasSacar" value="3" checked="cheked">3
      <input type="radio" name="cartasSacar" value="4">4
      <input type="radio" name="cartasSacar" value="5">5<br>
      <label for="total">Total a sacar: (suma total máxima del juego ): </label><input type="text" name="total" placeholder="min 2, max 15" <?php if(isset($argumentos['total'])) {echo "value = " . $argumentos['total'];} ?> > <br>
      <label for="eurosPartida">Euros en la partida: </label><input type="text" name="eurosPartida" <?php if(isset($argumentos['eurosPartida'])) {echo "value = " . $argumentos['eurosPartida'];} ?> value="5"> <br>
      <label for="eurosJugada">Euros por jugada: </label><input type="text" name="eurosJugada" <?php if(isset($argumentos['eurosJugada'])) {echo "value = " . $argumentos['eurosJugada'];} ?> value="2"> <br>



      <input type="submit" name="enviado" value="Enviar">

    </form>
    <br>

    <?php
  }


  if(isset($_POST['enviado'])){


    $falta = array();
    $validado = true;

    foreach($_POST as $clave => $valor) {//validamos los valores introducidos en el formulario con un foreach
      if(empty($_POST[$clave])){
        array_push($falta, $clave);//si esta vacio añadimos a un array el campo y el valor
        $validado = false;//valor false para la siguite comprobacion
      }
    }

    if($validado){
      foreach($_POST as $clave => $valor) {//validamos los valores introducidos en el formulario con un foreach
        $_SESSION[$clave] = filtrado($valor);// dar valor a $_SESSION, de los diferentes datos del juego
      }
      header("Location: .php");
    }else {//aviso de que algo está in rellenar
      echo '<span class="aviso">';
        echo 'Te ha faltado rellenar: ';
        echo implode(", ", $falta);
        echo '</span>';
        pintaFormulario($_POST);
      }
    }else {
      pintaFormulario();
    }

    ?>
  </body>
  </html>
