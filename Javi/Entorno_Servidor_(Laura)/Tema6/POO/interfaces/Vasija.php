<?php
/*Clase Vasija que define el estado de una vasija, implementa la Interfaz Antiguedad para definir su edad.
Proiedade: Nombre, edad
Metodos: setters y getters de las otras propiedades

*/
// Incluimos el archivo con la interfazz
require_once("Edad.php");

class Vasija implements Edad{
  // Propiedades
  private $denominacion;
  private $edad;
  // Constructor:
  function Vasija() {
  }
  // Métodos:
  function getDenominacion() {
    return $this->denominacion;
  }
  function setDenominacion($denominacion){
    $this->denominacion = $denominacion;
  }
  // Métodos obligatorios según la interface (si se elimina alguno se generará un error):
  public function getEdad() {
    return $this->edad;
  }
  public function setEdad($edad) {
    $this->edad = $edad;
  }
}
?>
