
<!--Crear un formulario donde se recibe el nombre del usuario.
Mostrar todas sus aficiones en formato lista ordenada.
Utilizar sentencias preparadas, con bind_param y bind_result.-->
<?php
include("header.php");
include("footer.php");

creaHeader("Consulta AFICIONES");

function filtrado($datos){
  $datos= trim($datos); //Elimina espacios antes y despues
  $datos= stripslashes($datos); //Elimina \ para que no te fastidie el codigo
  $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
  return $datos;
}
function fomrularioAf(){

  ?>
  <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    <table>
      <tr>
        <td > <label for="nombre"> Login: </label> </td>
        <td > <input type="text" name="nombre" id="nombre" placeholder="Nombre de usuario...." <?php if(isset($argumentos['nombre'])) {echo "value = " . $argumentos['nombre'];}?>> </td>
      </tr>
      <tr>
        <td colspan="2"> <input class="cta" type="submit" name="enviar" value="Enviar"> </td>
      </tr>
    </table>
  </form>
  <?php
}
fomrularioAf();

if (isset($_POST['enviar'])) {
  if (empty($_POST["nombre"])) {
    echo "<h3>Debes de introducir un nombre</h3>";
  }else {
    $Id = new mysqli("127.0.0.1", "javier", "Nohay2sin3", "dwes");
    $user = filtrado($_POST["nombre"]);
    if ( !($orden = $Id->prepare("SELECT aficiones FROM usuarios where usuario=?"))){ //preparación
      die("Falló la preparación de la sentencia: ".$Id->errno." - ".$Id->error);
    }
    $orden->bind_param( "s", $user ) ;
    $orden->execute();
    $resultados;//variable para almacenar
    $orden->bind_result($resultados); // almacena el resultado
    //bucle para recorrer los $datos
    ?>
    <ol>
    <?php
    while ( $orden->fetch()) {// Muestra valores obtenidos
      echo "<li>".$resultados."</li>";
    }
    ?>
  </ol>
  <?php
    $orden->close();//liberamos datoss
  }
}
creaFooter();
?>
