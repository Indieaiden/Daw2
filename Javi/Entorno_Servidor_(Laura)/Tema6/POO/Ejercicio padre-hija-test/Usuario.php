<?php
/*Clase como si fueramos usuario de una app de hacer ejercicio caminando*/
// Incluimos el archivo con la Clase de la que heredamos
require_once("Persona.php");

class Usuario extends Persona{

  // Propiedades
  private $nombreUsuario = null;
  private $password = null;
  // Constructor:
  function Usuario() {}
    // Metodos:
    public function getNombreUsuario() {
      return $this->nombreUsuario;
    }
    public function setNombreUsuario( $nombreUsuario ) {
      return $this->nombreUsuario = $nombreUsuario;
    }
    public function getPassword() {
      return $this->password;
    }
    public function setPassword( $password ) {
      return $this->password = $password;
    }
    // Redefinimos este metodo que existe tambien en la Clase padre:
    public function detenerse(){
      if( $this->caminando==true){
        $this->caminando=false;
        echo "Se paró el usuario...<br />";
      }else{
        echo "El usuario no camina...<br />";
      }
    }
  }

  ?>
