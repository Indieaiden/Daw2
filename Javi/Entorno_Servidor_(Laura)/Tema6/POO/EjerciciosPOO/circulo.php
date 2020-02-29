<?php
/*
Circulo descendiente de Figura
propiedades: radio
métodos: get/setRadio, getArea()
*/
include_once("figura.php");
class Circulo extends Figura{
	private $radio;

	public function getRadio(){
		return $this->radio;
	}
	public function setRadio($valor){
		$this->area=$valor;
	}
	public function getArea(){
		return pow($this->area,2)*M_PI;
	}
}

//mis pruebas
$figuras =new Figura("Figura");
$figuras->showInfo();
$circulo = new Circulo("Circulitis");
$circulo->setRadio(2);
$circulo->showInfo();
echo "Área del circulo = ". $circulo->getArea()."<br>";

 ?>
