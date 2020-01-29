<?php

/*
a. Propiedades: texto de la pregunta, un array con las respuetas posibles y el índice de la respuesta
correcta.
b. constructor mágico, que recibe toda la información, e inicialice las propiedades.
c. etiquetaPregunta($name), que devuelve los inputs necesarios para mostrar la pregunta dentro
de un formulario.
- Debe recibir como parámetro el valor del atributo name del input radio que utiliza para las
opciones.
d. esCorrecta($opcion), recibe la opción elgida y devuelve verdadero o falso si coincide con la
opción correcta
 */
class Pregunta{
  //Propiedades
  private $textoPregunta;
  private $respuestasPosibles;

  //Metodos
  //constructor magico (En desarrollo)
  function __construct() {
    $a = func_get_args();
    $i = func_num_args();
    if ( method_exists( $this,$f='__construct'.$i ) ){
      call_user_func_array( array($this,$f) , $a );
    }
    function __construct0(){//VER
				$this->textoPregunta = array("¿De qué color era el caballo blanco de Santiago?","¿ Quién fue el primer presidente de la democracia española tras el franquismo?","¿En qué continente está Ecuador?","¿Dónde originaron los juegos olímpicos?","¿De qué colores es la bandera de México?");;
				$this->respuestas = array(
          '1' => array(
            'no1' =>"azul",
            'no2' =>"verde",
            'si'=>"blanco",
          ),
          '2' => array(
            'si' =>"Adolfo suarez",
            'no1' =>"Felipe Gonzalez",
            'no2'=>"Manuel Fraga",
          ),
          '3' => array(
            'no1' =>"Asia",
            'si' =>"America",
            'no2'=>"Europa",
          ),
          '4' => array(
            'si' =>"Grecia",
            'no1' =>"Roma",
            'no2'=>"China",
          ),
          '1' => array(
            'si' =>"verde-blanco-rojo",
            'no1' =>"verde-blanco",
            'no2'=>"azul-verde-amarillo",
          ),
        );
  }
  //funcion etiqueta pregutna
  function etiquetaPregunta($name){
    ?>
    <form class="pregunta" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
      <h5><?php echo $textoPregunta[$name]; ?></h5>
      <?php foreach ($textoPregunta as $numpregunta => $valor) {
        foreach ($numpregunta as $key => $value) {
          ?>
          <input type="radio" name="respuesta" value="<?php echo $key; ?>"><?php echo $value."<br>"; ?>

          <?php
        }
      } ?>
      <input type="submit" name="responder" value="responder">
    </form>
    <?php
  }
  //cunfion esCorrecta
  function esCorrecta($opcion){
    $correcta = false;
    if ($opcion=='si') {
      $correcta = true;
    }
    return $correcta;
  }
}

}
?>
