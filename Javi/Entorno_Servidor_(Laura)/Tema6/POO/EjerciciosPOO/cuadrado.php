<?php
/*
Cuadrado descendiente de Figura
propiedades: lado
métodos: get/setLado getArea()
*/
include_once("figura.php");

class Cuadrado extends Figura{
	private $lado;
	public function getLado(){
		return $this->lado;
	}
	public function setLado($valor){
		$this->area=$valor;
	}
	public function getArea(){
		return pow($this->area,2);
	}
}

//mis pruebas
$figuras =new Figura("Figura");
$figura->showInfo();
$circulo = new Circulo("Circulitis");
$circulo->setRadio(2);
$circulo->showInfo();
echo "Área del circulo = ". $circulo->getArea()."<br>";


$cuadrado= new Cuadrado();
$cuadrado->setLado(5);
$circulo->showInfo();

echo "Área del cuadrado = ". $cuadrado->getArea()."<br>";

 ?>
