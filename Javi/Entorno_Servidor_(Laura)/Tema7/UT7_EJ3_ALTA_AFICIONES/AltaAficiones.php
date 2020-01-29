
<!--Realizar una página php, para dar de alta las aficiones de una persona.
Los campos del formulario serán:
login: campo de edición.
aficiones: como checkbox, o select multiple.
Una vez que se envíen:
- comprobar si está creada la tabla y sino crearla.
- Tabla: La tabla tendrá login, código y afición.
- Tabla: El código será un campo AUTO_INCREMENT para que se asigne automáticamente.
- Insertar las aficiones de ese usuario utilizando una sentencia preparada.
- Mostrar un mensaje al usuario informando que se ha creado correctamente.-->
<?php
include("header.php");
include("footer.php");

creaHeader();

function filtrado($datos){
  $datos= trim($datos); //Elimina espacios antes y despues
  $datos= stripslashes($datos); //Elimina \ para que no te fastidie el codigo
  $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
  return $datos;
}
function fomrularioAf(){

  ?>
  <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    <table>
      <tr>
        <td > <label for="nombre"> Login: </label> </td>
        <td > <input type="text" name="nombre" id="nombre" placeholder="Nombre de usuario...." <?php if(isset($argumentos['nombre'])) {echo "value = " . $argumentos['nombre'];}?>> </td>
      </tr>
      <tr>
        <td > <label for="codigo"> Codigo: </label> </td>
        <td > <input type="text" name="codigo" id="codigo" readonly> </td>
      </tr>
      <tr>
        <td colspan="2" class="af"> <label for="aficiones"> Aficiones: </label> </td>
      </tr>
      <tr>
        <td><label>Nadar</label><input type="checkbox" name="aficiones[]" value="Nadar"></td>
        <td><label>Deporte</label><input type="checkbox" name="aficiones[]" value="Deporte"></td>
      </tr>
      <tr>
        <td><label>Dormir</label><input type="checkbox" name="aficiones[]" value="Dormir"></td>
        <td><label>Videojuegos</label><input type="checkbox" name="aficiones[]" value="Videojuegos"></td>
      </tr>
      <tr>
        <td colspan="2"> <input class="cta" type="submit" name="sendear" value="Enviar"> </td>
      </tr>
    </table>
  </form>
  <?php
}
fomrularioAf();

if (isset($_POST['sendear'])) {
  $Id = new mysqli("127.0.0.1", "javier", "Nohay2sin3", "dwes");
  $user;
  if (! $Id -> query("create table IF NOT EXISTS usuarios(codigo INT(4) AUTO_INCREMENT PRIMARY KEY, usuario varchar (150),aficiones varchar (255))")){
    echo ("Falló la creación de la tabla: (".$Id->errno.") ".$Id->error) ;
  }//comprueba si la tabla existe y si no, la creada
  if (empty($_POST["nombre"])) {
    echo "<h3>Debes de introducir tu nombre</h3>";
  }else {
    $user = filtrado($_POST["nombre"]);
  }
  if (!empty($_POST["aficiones"])) {
    print_r($_POST["aficiones"]);;//DESPUES COMPROBAR SI EXISTE EL USUARIO Y METER LAS AFICIONES
    //hacemos prepare con if por si no funciona, que pare la ejecucuon (die)
    if ( !( $orden = $Id->prepare( "INSERT into usuarios (usuario, aficiones) values(? , ?)" ) ) )
    { echo "Falló la preparación: " . $Id->errno . " - " . $Id->error; }
    // Sentencia parametrizada: etapa 2 vinculación y ejecución
    //POST AFICIONES
    if ( ! $orden->bind_param( "ss", $user , $z) ){ // Vincula parámetros con variables
      echo "Falló la vinculación de parámetros: " . $orden->errno . "- " . $orden->error;
    }
    // ejecución repetida de la orden, solo se transfiere datos de cliente a servidor
    $y = count($_POST["aficiones"]);
    for ($x = 0; $x < $y; $x++) {
      $z= $_POST["aficiones"][$x];
      if ( !$orden->execute() ) {
        echo "Falló la ejecución: " . $orden->errno . "- " . $orden->error;
      }
    }

    //fin prepare
  }else {
    echo "<h3>Debes de introducir al menos una aficion</h3>";
  }

}
creaFooter();
?>
