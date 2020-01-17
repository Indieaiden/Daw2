
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
  <form action=" <?php $_SERVER["PHP_SELF"] ?> " method="post">
    <table>
      <tr>
        <td > <label for="nombre"> Login: </label> </td>
        <td > <input type="text" name="nombre" id="nombre" placeholder="Nombre de usuario...."> </td>
      </tr>
      <tr>
        <td > <label for="codigo"> Codigo: </label> </td>
        <td > <input type="text" name="codigo" id="codigo" value=""> </td>
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
    if (! $Id -> query("IF EXISTS usuarios") || ! $Id -> query("CREATE TABLE usuarios(nombreuser varchar (255), idusuario AUTO_INCREMENT), PRIMARY KEY (idusuario) ") ) {
      echo "Falló la creación de la tabla: (".$Id->errno.") ".$Id->error;
    }
    // if (! $Id -> query("IF EXIST aficiones") || ! $Id -> query("CREATE TABLE aficiones(idusuario int, aficion varchar(255) FOREIGN KEY (idusuario) REFERENCES usuarios(idusuario))") ) {
    //   echo "Falló la creación de la tabla: (".$Id->errno.") ".$Id->error;
    // }


    ?><h1>yay!</h1> <?php
  }
  creaFooter();
   ?>
