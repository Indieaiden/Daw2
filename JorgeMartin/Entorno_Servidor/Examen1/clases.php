<?php

class Carta{

  /*Cuatro constantes porque van a ser siempre
  esos valores y un valor*/
	const PICAS ="picas";
	const DIAMANTES ="diamantes";
	const TREBOLES ="treboles";
	const CORAZONES ="corazones";

	private $palo;
	private $valor;
  private $fichero;

	public function __construct($palo,$valor, $fichero){

    $this->fichero=$fichero;
		$this->palo=$palo;
		$this->valor=$valor;
	}

	public function img_carta(){
    $char = substr($this->palo, 0);
    $foto = $char.$this->valor.'.svg';

    $fotos = scandir($this->fichero, 1);
    $num_fotos = sizeof($fotos)-2;
    $flag = false;

    foreach ($fotos as $value) {
      if ($foto == $value){
        $flag = true;
      }
    }

    if($flag){
      return "<img src=\""."./img/".$foto."\" alt=\"NohayImagen\">";
    }
    else {
      return $foto."<br>";
    }

  }

  public function puntos_carta(){
    return $this->valor;
  }

/*No pongo getvalor porque es lo mismo que puntos_carta*/
  public function getpalo() {
    return $this->palo;
  }
  public function getfichero() {
    return $this->fichero;
  }
}


class Mazo{

	private $mazo=array();
  private $ruta;
  private $numcart;

	public function __construct($ruta="__DIR__", $numcart=10){
		$this->ruta = $ruta;
    $this->numcart = $numcart;
	}

	public function baraja(){
//Crea el mazo
    $palos= array(Carta::PICAS,Carta::DIAMANTES,Carta::TREBOLES,Carta::CORAZONES);
		for($i=0; $i<4;$i++){
			for($j=1;$j<=$this->numcart;$j++){
					array_push($this->mazo, new Carta($palos[$i],$j,$this->ruta));
				}
			}
//Lo baraja
		shuffle($this->mazo);
	}


	public function da_cartas($num){

    $cartitas = array();
		for ($i=0; $i < $num; $i++) {
      $carta = array_shift($this->mazo);
      array_push($cartitas, $carta);
    }

		return $cartitas;
	}

}

 ?>
