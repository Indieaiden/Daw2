<?php
/*Clase Persona que define el estado de una perosna, implementa la Interfaz Antiguedad para definir su edad.
Proiedade: Nombre, Apellidos edad
Metodos: setters y getters de las otras propiedades

*/
// Incluimos el archivo con la interfazz
require_once("Edad.php");

class Persona implements Edad{
  // Propiedades
  private $nombre;
  private $apellidos;
  private $edad;
  // Constructor:
  function Persona() {
  }
  // Métodos:
  function getNombre() {
    return $this->nombre;
  }
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
  public function getApellidos() {
    return $this->apellidos;
  }
  public function setApellidos($apellidos) {
    $this->apellidos = $apellidos;
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
