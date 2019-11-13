<?php
$_SERVER[];
class clase1{
  public function __construct() { } // Declaración de un constructor public
  public function MyPublic() { } // Declaración de un método public
  protected function MyProtected() { }// Declaración de un método protected
  private function MyPrivate() { } // Declaración de un método private
  function XX() // Esto es public
  {
    $this->MyPublic(); $this->MyProtected(); $this->MyPrivate();
  }
}
$obj = new clase1;
$obj->MyPublic(); // Funciona
$obj->MyProtected(); // Error Fatal
$obj->MyPrivate(); // Error Fatal
$obj->XX(); // Public, Protected y Private funcionan

class clase2 extends clase1{
  function ZZ() // Esto es public
  {
    $this->MyPublic();
    $this->MyProtected();
    $this->MyPrivate(); // Error Fatal
  }
}
$obj2 = new clase2;
$obj2->MyPublic(); // Funciona
$obj2->ZZ(); // Public y Protected funcionan, pero Private no
?>
