<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ficha
 *
 * @author Daw2
 */
class Ficha {

    private $nombre;
    private $imagen;

    function __construct($nombre, $imagen) {
        $this->nombre = $nombre;
        $this->imagen = $imagen;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getImagen() {
        return $this->imagen;
    }

    function etiquetaImg($alt, $alto, $ancho) {
        return "<img src=\"$this->imagen\" alt=\"$alt\"/ height=\"$ancho\" width=\"$alto\">";
    }

}
