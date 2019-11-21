<?php
  /*Clase padre que tiene las propiedades básicas*/
  /*
    Crea una clase padre que sea un personaje Base. Todos los
    personajes tienen sin depender de su tipo:
    Una variable que controla su Vida
    Una array numérico que controla su ataque, defensa y velocidad
    Un array que tiene el equipo que llevan en cabeza, cuerpo y piernas/pies

    Todos los personajes se crean con una vida base de 100, dinero 50, sin equipo,
    y en función de su clase (base 4 y +1 a un stat en concreto). La Clase se
    puede controlar por un string. La clase base es "aldeano". Inventa otras
    dos clases diferentes.

    Todo el mundo puede ver el dinero que tienes.

    Los personajes tienen que poder modificar su vida, y si baja de cero
    el personaje estará muerto.

    Todos los personajes pueden comprar o vender equipo, y en función de si compran
    o venden, el valor del objeto se añadirá o restará del dinero.

    Por otro lado, hay tres clases hijas: Héroe, NPC y Antihéroe
    Nosotros vamos a codificar al NPC.

    El NPC tendrá, además de todo lo anterior, una línea de diálogo, que podrá
    imprimir por pantalla cuando el héroe lo accione.
  */

  class Equipo {
    $nombre = "";
    $valor = "";
    $tipo = "";

    function Equipo($nombre, $valor, $tipo)
    {
      $this->nombre = $nombre;
      $this->valor = $valor;
      $this->tipo = $tipo;
    }
  }

  class PersonajeBase {
    protected $vida;
    public $dinero;
    protected $stats = array(
      "ataque" => 4,
      "defensa" => 4,
      "velocidad" => 4,
    );
    private $equipo = array(
      "cabeza" => "",
      "cuerpo" => "",
      "bajo" => "",
    );

    //Constructor
    function PersonajeBase ($equipo, $clase='aldeano', $dinero=50, $vida=100){
      $this->vida = $vida;
      $this->equipo = $equipo;

      if ($clase==='aldeano') {
        $this->stats['defensa']++;
      }
      if ($clase==='ladron') {
       $this->stats['velocidad']++;
      }
      if ($clase==='guerrero') {
        $this->stats['fuerza']++;
      }

      $this->dinero = $dinero;
    }

    //Métodos
    public function ModificarVida($value=0)
    {
      $this->vida += $value;
      echo "Vida: ".$this->vida."<br>";
      return true;
    }


    public function ModificarEquipo($equipo, $compra)
    {
      if($compra){
        //Poner el valor del equipo a negativo,
        //Sobreescribir el equipo dependiendo del tipo
        //añadir el valor al budget
      }
      else {
        //quitar el equipo con ese nombre del array
        //añadir el valor al budget
      }
    }

}
 ?>
