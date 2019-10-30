<?php
 /*Crea la clase Carta con las siguientes características:
	constantes: OROS, COPAS, ESPADAS, BASTOS, ASS, TRES, SOTA, CABALLO, REY	
	propiedades:
	- palo: el palo de la baraja puede ser OROS, COPAS, ESPADAS y BASTOS .
	- valor: valores del 1 al 7, y el 10,11, 12 (estos últimos serán los valores de las constantes SOTA, CABALLO y REY, y el 1 será el AS, y el 3 será el TRES).
	métodos:
	- imprime: que muestre los datos de la carta el palo y el valor.
	- puntos: devuelve un entero con los puntos de la carta según el valor que tenga
	- el AS suma 15 puntos.
	- el TRES suma 13 puntos.	
	- el resto de las cartas suman el valor de la carta.

*/
class Carta{
	const OROS = 'oros';
	const COPAS = 'copas';
	const ESPADAS = 'espadas';
	const BASTOS = 'bastos';
	const ASS = 1;
	const TRES = 3;
	const SOTA = 10;
	const CABALLO = 11;
	const REY = 12;
	
	private $palo;
	private $valor;
	
	public function __construct($palo, $valor){
		$this->palo = $palo;
		$this->valor= $valor;
	}
	public function imprime(){
		echo $this->valor. " de ".$this ->palo;
	}
	public function puntos(){
		$puntos = $this->valor;
		switch ($this->valor){
			case Carta::ASS: $puntos = 15; break;
			case Carta::TRES: $puntos = 13; break;
		}
		return $puntos;
	}	
}


// CLASE BARAJA --------------
/*
Crear la clase Baraja con las siguientes propiedades y métodos.
-	propiedades:
o	mazo.- que inicialmente contendrá todas las cartas de la baraja.
o	descartes.- inicialmente vacio. Contendrá todas las cartas que vayan descartando.
-	métodos:
o	constructor: crear la baraja con las cartas de los 4 palos, y los valores del 1 al 7 y del 10 al12.
o	barajar.-mezclará las cartas. 
o	sacarCarta.- devuelve la primera carta del mazo y la elimina del mazo.
o	devolver Carta.- agrega una carta al mazo.

*/
class Baraja {
	private $mazo = array();
	private $descartes = array();

	function __construct(){
		$this->mazo = array();
		$palos = array(Carta::OROS, Carta::COPAS,  Carta::ESPADAS, Carta::BASTOS);
		foreach($palos as $palo){
			for ($valor=1; $valor<8; $valor++){
				$carta = new Carta($palo, $valor);
				$this->mazo[]= $carta;
			}
			for ($valor = 10;$valor <=12; $valor++){
				$carta = new Carta($palo, $valor);
				$this->mazo[]= $carta;
			}
		}
		//ver($this->mazo);
		$this->descartes = array();
	}
	function barajar(){
		//ver2("antes");
		//ver($this->mazo);
		shuffle($this->mazo);
		//ver2("después");
		//ver($this->mazo);
	}
	function sacarCarta(){
		$carta = array_pop($this->mazo);
		$this->descartes[]=$carta;
		//ver($this->mazo);
		return $carta;
	}
	function devolverCarta(Carta $carta){
		$this->mazo[]=$carta;
	}
}
?>