<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title>Practica Objetos</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
			class CabeceraPagina {
				
				//Propiedades
				private $titulo;
				private $posicion; 
				private $backColor;
				private $fontColor;
				
				//metodos
				function __construct($titulo,$posicion,$backColor,$fontColor){
					$this->titulo = $titulo;
					$this->posicion = $posicion;
					$this->backColor = $backColor;
					$this->fontColor = $fontColor;
				}
				
				function escribirCabecera(){
					echo"<h1 style =\"background-Color:".$this->backColor.";text-align:".$this->posicion.";color:".$this->fontColor.";\">".$this->titulo."</h1>";
				}
				
				
				// public function setTitulo($titulo){
					// $this->titulo = $titulo;
				// }
				// public function getTitulo(){
					// return $this->titulo;
				// }
			}
		?>
		<?php
			$a = new CabeceraPagina('Titulo','right','red','black');
			$a->escribirCabecera();
		?>
	</body>
</html>