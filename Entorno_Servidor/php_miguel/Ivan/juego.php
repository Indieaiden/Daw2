<?php

/*
  $_SESSION['Jugador1']     Nombre jugador 1
  $_SESSION['Jugador2']     Nombre jugador 2
  $_SESSION['ficha']        Ficha jugador 1
  $_SESSION['gana']         Booleano
  $_SESSION['tablero']      Objeto tablero
  $_SESSION['Ojugador2']    Objeto jugador1     turno TRUE
  $_SESSION['Ojugador2']    Objeto jugador2

 * 
 * imput sube arriba la info y luego se hace el cambio
 */
include './inc/header.php';
include './inc/Ficha.php';
include './inc/Tablero.php';
include './inc/Jugador.php';
session_start();


if (!isset($_GET["casilla"])) {
    $ficha_1 = new Ficha("circulo", "imagenes/circulo.png");
    $ficha_2 = new Ficha("cruz", "imagenes/cruz.png");
    $tablero = new Tablero($ficha_1, $ficha_2);

    if ($_SESSION['ficha'] == "circulo") {
        $jugador_1 = new Jugador($_SESSION['Jugador1'], $ficha_1);
        $jugador_2 = new Jugador($_SESSION['Jugador2'], $ficha_2);
    } else {
        $jugador_1 = new Jugador($_SESSION['Jugador1'], $ficha_2);
        $jugador_2 = new Jugador($_SESSION['Jugador2'], $ficha_1);
    }
    $tablero->iniciar();
    $_SESSION['tablero'] = $tablero;

    $_SESSION['Ojugador1'] = $jugador_1;
    $_SESSION['Ojugador2'] = $jugador_2;
    $tablero->mostrar();
} else {
    $tablero = $_SESSION['tablero'];
    $jugador_1 = $_SESSION['Ojugador1'];
    $jugador_2 = $_SESSION['Ojugador2'];
    $_SESSION['gana'] = $tablero->verificar();
    if (!$_SESSION['gana']) {
        $tablero->cambioTurno();
        $ultimohueco = $_GET["casilla"];
        if ($tablero->turno) {
            $tablero->ponerficha($ultimohueco, $jugador_1->getFicha());
        } else {
            $tablero->ponerficha($ultimohueco, $jugador_2->getFicha());
        }
        $tablero->mostrar();
        
    } else {
        echo "ha ganado ";
        $_SESSION['gana']=FALSE;
        if($tablero->turno){
            echo $jugador_1->getNombre();
            $jugador_1->sumaPuntos(1);
        }
        else{
            echo $jugador_2->getNombre();
            $jugador_2->sumaPuntos(1);
        }
        
        ?>
<br><br>
<a href="http://localhost/3rayas/juego.php">click aqui para jugar otra</a>
        <?php
    }
}
include './inc/fooder.php';
