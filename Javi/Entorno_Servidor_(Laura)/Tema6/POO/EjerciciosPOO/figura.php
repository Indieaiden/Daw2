<?php
/*
Crea las clases:
Figura
Propiedades: nombre, color, esRellena
métodos: getNombre(), get/setColor(), estaRellena(), estaVacia(), showInfo()(muestra
la información de la figura).
constructor: recibe el nombre de la figura y lo pone en nombre.

 */
class Figura{
  $nombre;
  $colores;
  $esRellena;

  function __construct($nombreFig){
    $this->$nombre = $nombreFig;
    $this->$colores = "";
    $this->esRellena = false;
  }
  function getNombre(){
    return this->$nombre;
  }
  function getColor(){
    return this->$colores;
  }
  function setColor($color){
    this->$colores = $color;
  }
  function estaRellena(){
    if ($esRellena==true) {
      return true;
    }else{
      return false;
    }
  }
  function estaVacia(){
    if ($esRellena==true) {
      return false;
    }else{
      return true;
    }
  }
   function showInfo(){
     echo ($nombre+" tiene el color "+$colores+" y "+(estaVacia()==true ? "esta vacio" : "esta llena"));
   }
}
 ?>
