<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>JUEGO</title>
</head>
<body>
  <?php
  /*
  a) Recibe los nombres de los jugadores por get
  - Si no recibe esta información informar al usuario y cortar la ejecución.
  b) La primera vez que entra inicia la sesión,
  - Crea los dos jugadores.
  - Crea el juego del trivial.
  - Lo carga en la sesión.
  c) Si no se ha enviado la respuesta: cargar la siguiente pregunta y muestra el formulario.
  d) Si se ha enviado la respuesta, comprobar el resultado, actualizar marcadores y recargar la
  página.
  e) Debe mostrar los marcadores.
  f) Añadir un formulario para abandonar el juego.
  - Eliminar correctamente el juego y dar un mensaje de despedida.
  g) Mostrar el fondo de la pregunta de cada jugador de un color distinto.
  Ejemplo de presentación del juego
  */
  include ("Trivial.php");
  function filtrado($datos){
    $datos= trim($datos); //Elimina espacios
    $datos= stripslashes($datos); //Elimina el caracter \
    $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
    return $datos;
  }
  if (empty($_GET["jugador1"]) || empty($_GET["jugador2"])) {
    die("No se han recibido los nombres de los jugadores por get");
  }
  if (empty($_POST["abandonar"])) {
    session_start();
    $_SESSION["jugador1"]=new Jugador(filtrado($_GET["jugador1"]));
    $_SESSION["jugador2"]=new Jugador (filtrado($_GET["jugador2"]));
    $_SESSION["trivial"]= new Trivial($_SESSION["jugador1"], $_SESSION["jugador2"]);

    $_SESSION["trivial"] -> muestraPregunta();
    compruebaRespuesta();
    muestraMarcador();

    ?>
    <form class="adios" action="#" method="post">
      <input type="sumbit" name="abandonar" value="abandonar">
    </form>

    <?php
    // code...
  }else{
    ?>
    <h1>hasta luego!</h1>
    <?php
  }







  ?>
</body>
</html>
