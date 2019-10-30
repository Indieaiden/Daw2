
		<?php
			class Carta {
				//Constantes
				const OROS = 'oros';
				const COPAS = 'copas';
				const ESPADAS = 'espadas';
				const BASTOS = 'bastos';
				const ASS = '1';
				const TRES = '3';
				const SOTA = '10';
				const CABALLO = '11';
				const REY = '12';
				//Propiedades
				protected $palo;
				protected $valor; 
				
				//constructor
				function __construct($valor,$palo){
					$this->valor = $valor;
					$this->palo = $palo;
				}
				
				//metodos
				function imprime(){
					echo"$this->palo";
					echo"$this->valor";
				}
				function puntos(){
					if($this->valor=1){
						$puntos+=15;
					}else{
						if($this->valor=3){
							$puntos+=13;
						}else{
							$puntos+=$this->valor;
						}

					}
					return $puntos;
				}
			}
		?>
		<?php
			class Baraja{
				
				//Propiedades
				private $mazo;
				
				//constructor
				function __construct($mazo){
					//mazo es un array de cartas
					$this->mazo = $mazo;
				}
				
				//metodos
				function Barajar(){
					for($i=0;$i<20;$i++){
						$random = rand(0,40);
						$random2 = rand(0,40);
						$variable = $this->mazo[$random];
						$this->mazo[$random] = $this->mazo[$random2];
						$this->mazo[$random2] = $variable;
					}
					return $this->mazo;
				}
				
				function devolverCarta($carta){
					array_push($this->mazo,$carta);
				}
				function sacarCarta(){
					$carta = array_shift($this->mazo);
					return $carta;
				}
			}
		?>
		<?php
			if(isset($_SESSION["login"])){
				$mazo=array();
				$cartasUser=array();
				$cartasPC=array();
				for($i=0;$i<4;$i++){
					for($j=0;$j<7;$j++){
						if($i=0){	
							$mazo[]=new Carta($j,'oros');
						}
						if($i=1){	
							$mazo[]=new Carta($j,'copas');
						}
						if($i=2){	
							$mazo[]=new Carta($j,'espadas');
						}
						if($i=3){	
							$mazo[]=new Carta($j,'bastos');
						}	
					}
					for($a=10;$a<13;$a++){
						if($i=0){	
							$mazo[]=new Carta($a,'oros');
						}
						if($i=1){	
							$mazo[]=new Carta($a,'copas');
						}
						if($i=2){	
							$mazo[]=new Carta($a,'espadas');
						}
						if($i=3){	
							$mazo[]=new Carta($a,'bastos');
						}	
					}
				}
			}else{
				echo'Lo sentimos pero el usuario no es valido';
			}
			
		?>