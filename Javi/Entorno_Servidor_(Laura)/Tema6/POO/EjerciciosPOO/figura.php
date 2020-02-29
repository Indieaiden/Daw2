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
  
  public $nombre;
  public $colores;
  public $esRellena;

  
  function getNombre(){
    return $this->nombre;
  }
  function getColor(){
    return $this->colores;
  }
  function setColor($color){
    $this->colores = $color;
  }
  public function estaRellena(){
    if ($this->esRellena==true) {
      return true;
    }else{
      return false;
    }
  }
  public function estaVacia(){
    if ($this->esRellena==true) {
      return false;
    }else{
      return true;
    }
  }
   function showInfo(){
     echo ($this->nombre." tiene el color ".$this->colores." y ".($this->estaVacia()==true ? "esta vacio" : "esta llena"));
   }
}
 ?>
