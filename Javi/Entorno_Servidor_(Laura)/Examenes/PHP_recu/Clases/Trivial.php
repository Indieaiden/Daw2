<?php
include('jugador.php');
include('pregunta.php');

/*
a) Propiedades: preguntas, jugadores, turno y preguntaEnCurso.
b) Constructor que recibe como parámetro dos jugadores.
- Inicializa el array con los jugadores.
- inicializa el array con vuestras preguntas (usar la clase Pregunta).
- mezcla las preguntas.
- inicializa el turno.
c) cargaPregunta():
- Cambia de turno.
- obtiene una pregunta del array , la carga en la propiedad correspondiente, y la elimina.
- devuelve verdadero o falso, según se haya podido cargar o no la pregunta. Si no quedan
preguntas devuelve false.
d) muestraPregunta($name_submit):
- Muestra el nombre del jugador que tiene que responder.
- imprime un formulario con la pregunta que hay en preguntaEnCurso.
- recibe el nombre del input de tipo submit.
e) compruebaRespuesta():
- según lo obtenido del formulario, comprueba si la respuesta es correcta, y le suma los
puntos al jugador que esté en el turno actual.
f) muestraMarcador():
- Muestra la tabla de resultados con la puntuación de los jugadores.
 */
class Trivial{
  //Propiedades
  private $preguntas;
  private $jugadores;
  private $turno;
  private $preguntaEnCurso;
  //Metodos
  //constructor
  function Trivial($Jugador1, $Jugador2){
    $this->jugadores = array($jugador1, $jugador2);
    $this->preguntas = new Pregunta();
    shuffle($this->preguntas);
    $turno = -1;
  }
  //funcion cargaPregunta
  function cargaPregunta(){
    $cargaPregunta = false;
    $turno++;
    if (length($preguntas) > 0) {
      $cargaPregunta = true;
      $preguntas-> etiquetaPregunta($turno);
      array_splice($preguntas, $turno);
    }
    return $cargaPregunta;
  }
  //funcion muestraPregunta
  function muestraPregunta($name_submit){
    ?>
    <p>Turno del jugador: <?php $name_submit ?></p>
    <?php
    cargaPregunta();
  }
  //funcion comprueba
  function compruebaRespuesta(){
    $comprobar = false;
    if ($_GET['respuesta']=='si') {
      $jugadores[$name_submit]->sumaPuntos();
    }
  }
  //f) muestraMarcador():
  function muestraMarcador(){
    ?>
    <table>
      <tr>
        <td> Jugador </td>
        <td> Puntos </td>
      </tr>
      <tr>
        <td><?php echo  $jugadores[0]; ?></td>
        <td><?php echo  jugadores[0]->$puntos; ?></td>
      </tr>
      <tr>
        <td><?php echo $jugadores[1]; ?></td>
        <td><?php echo jugadores[1]->$puntos; ?></td>
      </tr>
    </table>

    <?php
  }

}








 ?>
