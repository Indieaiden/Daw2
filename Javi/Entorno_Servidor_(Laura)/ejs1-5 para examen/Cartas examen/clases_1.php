<?php

	
class Carta{
	
	const OROS ="oros";
	const COPAS ="copas";
	const ESPADAS ="espadas";
	const BASTOS ="bastos";
	const ELAS=1;
	const TRES =3;
	const SOTA =10;
	const CABALLO =11;
	const REY =12;
	
	public $palo;
	public $valor;
	
	public function __construct($palo,$valor){
		
		$this->palo=$palo;
		$this->valor=$valor;
	}
	/*public function __toString() {
			return "[Carta,palo,valor: ".$this->palo ." ".$this->valor ."]";
    }*/
	public function imprime(){
		
		echo $this->palo ." ".$this->valor ;
	}
	public function puntos(){
		
		$puntuacion=0;
		if($this->valor == self::ELAS){
			$puntuacion=15;
		}elseif($this->valor == self::TRES){
			$puntuacion=13;
		}else{
			$puntuacion=$this->valor;
		}
		return $puntuacion;
	}

}

class Baraja{
	
	public $mazo=array();
	
	public function __construct(){
		$palos= array(Carta::OROS,Carta::COPAS,Carta::ESPADAS,Carta::BASTOS);
		for($i=0; $i<4;$i++){
			for($j=1;$j<=10;$j++){
				if($i<=7){
					array_push($this->mazo, new Carta($palos[$i],$j));
				}else{
					array_push($this->mazo, new Carta($palos[$i],$j+2));
				}
			}
		}
	}
	public function barajar(){
		
		shuffle($this->mazo);
	}
	public function sacarCarta(){
		
		$cartina= $this->mazo[0];
		array_shift($this->mazo);
		return $cartina;
	}
	public function devolverCarta($carta){
		array_push($this->mazo,$carta);
	}
}



?>