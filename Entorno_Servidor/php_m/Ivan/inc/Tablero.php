<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tablero
 *
 * @author Daw2
 */
class Tablero {

    private $ficha1;
    private $ficha2;
    public $turno = true;
    private $tablero;

    function __construct(Ficha $ficha1, Ficha $ficha2) {
        $this->ficha1 = $ficha1;
        $this->ficha2 = $ficha2;
    }

    function getFicha() {
        if ($this->turno) {
            return $this->ficha1;
        } else {
            return $this->ficha2;
        }
    }

    function cambioTurno() {
        if ($this->turno) {
            return $this->turno = false;
        } else {
            return $this->turno = true;
        }
    }

    function iniciar() {
        $this->tablero[0] = "<a href=\"{$_SERVER["PHP_SELF"]}?casilla=0\"><img src=\"imagenes/blanco.png\"><a/>";
        $this->tablero[1] = "<a href=\"{$_SERVER["PHP_SELF"]}?casilla=1\"><img src=\"imagenes/blanco.png\"><a/>";
        $this->tablero[2] = "<a href=\"{$_SERVER["PHP_SELF"]}?casilla=2\"><img src=\"imagenes/blanco.png\"><a/>";
        $this->tablero[3] = "<a href=\"{$_SERVER["PHP_SELF"]}?casilla=3\"><img src=\"imagenes/blanco.png\"><a/>";
        $this->tablero[4] = "<a href=\"{$_SERVER["PHP_SELF"]}?casilla=4\"><img src=\"imagenes/blanco.png\"><a/>";
        $this->tablero[5] = "<a href=\"{$_SERVER["PHP_SELF"]}?casilla=5\"><img src=\"imagenes/blanco.png\"><a/>";
        $this->tablero[6] = "<a href=\"{$_SERVER["PHP_SELF"]}?casilla=6\"><img src=\"imagenes/blanco.png\"><a/>";
        $this->tablero[7] = "<a href=\"{$_SERVER["PHP_SELF"]}?casilla=7\"><img src=\"imagenes/blanco.png\"><a/>";
        $this->tablero[8] = "<a href=\"{$_SERVER["PHP_SELF"]}?casilla=8\"><img src=\"imagenes/blanco.png\"><a/>";
    }

    function mostrar() {
        echo "
        <table>
            <tbody>
            <tr>
                <td>" . $this->tablero[0] . "</td>
                <td>" . $this->tablero[1] . "</td>
                <td>" . $this->tablero[2] . "</td>
            </tr>
            <tr>
                <td>" . $this->tablero[3] . "</td>
                <td>" . $this->tablero[4] . "</td>
                <td>" . $this->tablero[5] . "</td>
            </tr>
            <tr>
                <td>" . $this->tablero[6] . "</td>
                <td>" . $this->tablero[7] . "</td>
                <td>" . $this->tablero[8] . "</td>
            </tr>
            </tbody>
        </table>";
    }

    function verificar() {
        $gana = FALSE;
        if ($this->tablero[0] === $this->tablero[1] && $this->tablero[0] === $this->tablero[2]) {
            $gana = TRUE;
        } elseif ($this->tablero[3] === $this->tablero[4] && $this->tablero[3] === $this->tablero[5]) {
            $gana = TRUE;
        } elseif ($this->tablero[6] === $this->tablero[7] && $this->tablero[6] === $this->tablero[8]) {
            $gana = TRUE;
        } elseif ($this->tablero[0] === $this->tablero[3] && $this->tablero[0] === $this->tablero[6]) {
            $gana = TRUE;
        } elseif ($this->tablero[1] === $this->tablero[4] && $this->tablero[1] === $this->tablero[7]) {
            $gana = TRUE;
        } elseif ($this->tablero[2] === $this->tablero[5] && $this->tablero[2] === $this->tablero[8]) {
            $gana = TRUE;
        } elseif ($this->tablero[0] === $this->tablero[4] && $this->tablero[0] === $this->tablero[8]) {
            $gana = TRUE;
        } elseif ($this->tablero[2] === $this->tablero[4] && $this->tablero[2] === $this->tablero[6]) {
            $gana = TRUE;
        }
        return $gana;
    }

    function ponerficha($casilla, Ficha $ficha) {
        $this->tablero[$casilla] = $ficha->etiquetaImg("no se encontro la imagen", 224, 224);
    }

}
