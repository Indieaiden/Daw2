<?php
/*
Propiedades: nombre y puntos.
Constructor mágico, que reciba el nombre. Los puntos se inician a 0.
Get mágico.
sumaPuntos($valor), incrementará los puntos la cantidad $valor, poner el parámetro por defecto con valor 1
*/
class Jugador{
  //Propiedades
  private $nombre;
  private $puntos;

  //metodos
  //constructos magico
  function __construct() {
    $a = func_get_args();
    $i = func_num_args();
    if ( method_exists( $this,$f='__construct'.$i ) ){
      call_user_func_array( array($this,$f) , $a );
    }

  }
  function __construct0($nombre){
      $this->$nombre=$nombre;
      $this->$puntos =0;

  }
  //get magico
  public function __get($propiedad){
    return $propiedad;
  }
  //funcion suma $punto
  function sumaPuntos($valor=1){
    $this->$puntos += $valor;

  }

}







?>
