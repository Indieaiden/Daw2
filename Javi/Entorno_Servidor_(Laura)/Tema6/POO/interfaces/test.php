<?php
//test clases interfaz
require_once("Persona.php");//la Clase
require_once("Vasija.php");//la Clase

$luisa = new Persona();

$luisa->setNombre("Luisa");
$luisa->setApellidos("Perez");
$luisa->setEdad(19);//de la interfaz

echo "Nombre: ".$luisa->getNombre()."<br/>";
echo "Apellidos: ".$luisa->getApellidos()."<br/>";
echo "Edad:: ".$luisa->getEdad()."<br/>";

$jarronChino = new Vasija();

$jarronChino->setDenominacion("Jarron_chino");
$jarronChino->setEdad(57);//de la interfaz

echo "Nombre: ".$jarronChino->setDenominacion()."<br/>";
echo "Edad:: ".$jarronChino->getEdad()."<br/>";
?>
