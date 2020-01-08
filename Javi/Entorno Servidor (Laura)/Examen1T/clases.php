
<?php
/*
Crea el php clases.php, donde estén:
La clase Mazo. *
La clase Carta. *
*/
class Mazo{
  /*
  a) Propiedades: a determinar por el alumno. Razona tu respuesta, con un comentario en el código fuente.
  b) Constructor: recibe un parámetro con el directorio de donde debe leer las cartas, y cuantas cartas por palo. Los parámetros serán opcionales teniendo los valores por defecto: el directorio en curso y 10.
  c) baraja(): Crea la baraja y la mezcla. *
  d) da_cartas(numero): devuelve un array con la cantidad de cartas indicada en el parámetro. Estas cartas desaparecerán del mazo de cartas. (PUSH)
  e) Nota: utilizar la clase Carta.
  */
  public $mazo=array();//creamos la clase mazo que va a almacenar un array que contiene la clase Carta

  public function __construct($valor){
    $palos= array(Carta::DIAMANTES,Carta::CORAZONES,Carta::PICAS,Carta::TREBOLES);//xonstructor que crea array asociativo con las constantes de Cartas
    for($i=0; $i<4;$i++){//define el tipo de carta dando al array asociativo el indice de los palos anteriores
      for($j=1;$j<=$valor;$j++){//Aqui se introduce cada carta segun el valor introducido (luego sera 7 ó 10)
        array_push($this->mazo, new Carta($palos[$i],$j));//funcion que va añadiendo cartas con palos a las barajas con array asociativo
      }
    }
  }
  public function baraja(){//Shiffle mezcla los arrays simulando un barajado
    shuffle($this->mazo);//
  }
  public function sacarCarta(){

    $cartina= $this->mazo[0];
    array_shift($this->mazo);
    return $cartina;
  }
  public function da_Cartas($carta){//usar PUSH
    array_push($this->mazo,$carta);
  }
}

class Carta{
  /*
  La clase Carta. *
  f) propiedades: palo de la baraja, puntos y fichero asociado. *
  g) constructor: que reciba todos los parámetros. *
  h) img_carta(): comprueba que existe la carta indicada y devuelve el la etiqueta img correspondiente a la carta
  i) puntos_carta(): Devuelve la puntuación que le corresponde a la carta.
  j) getters de las propiedades.
  */
  const DIAMANTES ="d";
  const CORAZONES ="c";
  const PICAS ="p";
  const TREBOLES ="t";
  public $palo;
  public $valor;

  public function __construct($palo,$valor){

    $this->palo=$palo;
    $this->valor=$valor;
  }
  public function img_carta($palo,$valor){//comprueba si existe la carta

    if ($valor<=10||$valor>=1) {
      echo "<img src=\"./imagenes/".$palo.$valor.".svg\">";

    }
  }
  public function puntos_carta(){
    return $this->valor;
  }
  public function getPalo(){
    return $this->palo;
  }
}





?>
