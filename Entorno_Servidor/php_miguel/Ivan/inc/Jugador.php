<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jugador
 *
 * @author Daw2
 */
class Jugador {

    private $nombre;
    private $ficha;
    private $puntos = 0;

    function __construct($nombre, $ficha) {
        $this->nombre = $nombre;
        $this->ficha = $ficha;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFicha() {
        return $this->ficha;
    }

    function getPuntos() {
        return $this->puntos;
    }
    function sumaPuntos($punto) {
        $this->puntos += $punto;
    }

}
