<?php
class clase1
{
  public $a = 'Public'; protected $b = 'Protected'; private $c = 'Private';
  function mostrar() {
    echo $this->a;
    echo $this->b; echo
    $this->c;
  }
}
$obj = new clase1();
echo $obj->a; // Funciona bien
echo $obj->b; // Error Fatal
echo $obj->c; // Error Fatal
$obj->mostrar(); // Muestra Public, Protected y Private
class clase2 extends clase1 // Se puede redeclarar propiedades y métodos public y protected, pero no private
{
  protected $b = 'Protected2';
  function mostrar() {
    echo $this->a; echo $this->b; echo $this->c;
  }
}
$obj2 = new clase2();
echo $obj2->a; // Funciona bien
echo $obj2->b; // Error Fatal
echo $obj2->c; // Undefined
$obj2->mostrar(); // Muestra Public, Protected2, Undefined
?>
