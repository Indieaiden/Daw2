<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title>Prueba Objetos 4</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
			abstract class Figura {
				
				//Propiedades
				protected $nombre;
				protected $color; 
				protected $esRellena;
				
				//constructor
				function __construct($nombre){
					$this->nombre = $nombre;
					$this->color = 'black';
					$this->esRellena = true;
				}
				
				//metodos
				function getNombre(){
					return $this->nombre;
				}
				final function setNombre($nombre){
					$this->nombre = $nombre;
				}
				function getColor(){
					return $this->color;
				}
				function setColor($color){
					$this->color = $color;
				}
				function estaRellena(){
						return $this->esRellena;
				}
				function estaVacia(){
					if(!($this->esRellena)){
						return $this->esRellena;
					}
				}
				function showInfo(){
					echo"Nombre: $this->nombre, Color: $this->color, ¿Está lleno? $this->esRellena";
				}
				abstract function getArea();
			}
		?>
		<?php
			// $a = new CabeceraPagina('Titulo','right','red','black');
			// $a->escribirCabecera();
			class Circulo Extends Figura{
				
				//Propiedades
				private $radio;
				
				//constructor
				function __construct($nombre){
					parent::__construct($nombre);
					$this->radio = 1;
				}
				
				//metodos
				function getRadio(){
					return $this->radio;
				}
				function setRadio($radio){
					$this->radio = $radio;
				}
				function getArea(){
					$pi = M_PI;
					return $pi*(pow($this->radio, 2));
				}
				function getNombre(){
					return "circulo ".$this->nombre;
				}
				function showInfo(){
					parent::showInfo();
					echo $this->radio;
				} 
			}
		?>
		<?php
			interface Imprimible{
				function imprime();
			}
			
			class Cuadrado Extends Figura implements Imprimible{
				
				//Propiedades
				private $lado;
				
				//constructor
				function __construct($nombre){
					parent::__construct($nombre);
					$this->lado = 4;
				}
				
				//metodos
				function getLado(){
					return $this->lado;
				}
				function setLado($lado){
					$this->lado = $lado;
				}
				function getArea(){
					return pow($this->lado, 2);
				}
				function showInfo(){
					parent::showInfo();
					echo $this->lado;
				}
				function imprime(){
					if($this->esRellena){
						?><div style="width:80px;height:80px;background-color:<?php echo $this->color ?>;">hhh</div> <?php
					}else{
						?><div style="width:80,height:80"></div> <?php
					}
				}
			}
			
			// class rectangulo Extends Figura{
				// Propiedades
				// private $base;
				// private $altura;
				// metodos
				// function getArea(){
					// $this->base*$this->altura;
				// }
			// }
			
		?>
		<?php
			// $figura = new Figura('triangulo');
			$circulo = new circulo('circulo');
			$cuadrado = new cuadrado('cuadrado');
			// $cuadrado = new rectangulo('cuadrado');
			// $figura->showInfo();
			// echo $figura->estaVacia();
			// echo $figura->estaRellena();
			// echo $figura->getNombre();
			// echo $circulo->getNombre();
			// echo $circulo->setRadio(4);
			// echo $circulo->showInfo();
			// echo '<br>';
			// echo $cuadrado->showInfo();
			$cuadrado->imprime();
			
		?>
	</body>
</html>