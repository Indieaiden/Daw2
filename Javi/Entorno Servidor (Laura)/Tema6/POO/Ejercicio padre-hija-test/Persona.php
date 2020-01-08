<?php
/*Clase persona con nombre apellidos sexo y capacidad de andar protected para heredar*/
class Persona{
  // Propiedades
  private $nombre;
  private $apellidos;
  private $sexo;
  protected $caminando = false;
  // Constructor:
  function Persona() {}
    // Metodos:
    function getNombre() {
      return $this->nombre;
    }
    public function setNombre( $nombre ) {
      $this->nombre = $nombre;
    }
    public function getApellidos() {
      return $this->apellidos;
    }
    public function setApellidos( $apellidos ) {
      $this->apellidos = $apellidos;
    }
    public function getSexo() {
      return $this->sexo;
    }
    public function setSexo( $sexo ) {
      $this->sexo = $sexo;
    }
    public function caminar() {
      if( $this->caminando == true ) {
        echo "Ya estaba caminando...<br />";
      }else	{
        $this->caminando = true;
        echo "Comienza a caminar...<br />";
      }
    }

    public function detenerse(){
      if( $this->caminando==true ){
        $this->caminando=false;
        echo "Se paró...<br />";
      }else{
        echo "No camina...<br />";
      }
    }
  }
  ?>
