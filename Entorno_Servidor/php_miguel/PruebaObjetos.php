<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title>Funciones Tienda</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
			class Tardis {
				
				//Propiedades
				protected $color;
				protected $tipo; //electrico o combustible
				protected $velocidad = 0;
				
				public static $ventas = 0;
				
				const ELECTRICO = 1;
				const COMBUSTIBLE = 2;
				const VEL_MAX = 250;
				const VEL_MIN = 0;
				//Constructores
				
				//Acelerar de 10 en 10 siempre que no supere la velocidad maxima
				public function acelerar(){
					if(Tardis::VEL_MAX > $this->velocidad){
						 $this->velocidad += 10; 
					}
				}
				//Frenar de 10 en 10 siempre que no supere la velocidad minima
				public function frenar(){
					if(Tardis::VEL_MIN < $this->velocidad){
						 $this->velocidad -= 10; 
					}
				}
				//Metodos
				/*
				*/
				public function setColor($color){
					$this->color = $color;
				}
				public function getColor(){
					return $this->color;
				}
				public function setTipo($tipo){
					$this->tipo = $tipo;
				}
				public function getTipo(){
					return $this->tipo;
				}
				//Metodo estático
				public static function totalVentas(){
					
					return Tardis::$ventas;
				}
			}
			
			$miTardis = new Tardis();
			$miTardis -> setColor("azul");
			$miTardis -> setTipo(Tardis::ELECTRICO);
			print_r($miTardis);
			echo"<br>";
			
			$miCabina = new Tardis();
			$miCabina -> setColor("rojo");
			$miCabina -> setTipo(Tardis::COMBUSTIBLE);
			print_r($miCabina);
			echo"<br>";
			
			
			echo"Se ha producido una venta <br>";
			Tardis::$ventas+=37;
			echo"El total de ventas es: ".
				Tardis::totalVentas()."<br>";
			
		?>
	</body>
</html>