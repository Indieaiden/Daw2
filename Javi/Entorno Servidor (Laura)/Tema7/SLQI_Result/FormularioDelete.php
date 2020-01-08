

<?php
function filtrado($datos){
  $datos= trim($datos); //Elimina espacios antes y despues
  $datos= stripslashes($datos); //Elimina \ para que no te joda el codigo
  $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
  return $datos;
}

if (isset($_POST["eliminar"])) {
  $user = filtrado($_POST["usuario"]);

  $id = new mysqli("127.0.0.1", "root", "", "dwes");
  $aniadir = $id->real_query("delete from usuario where login = \"".$user."\"");

  if ($id->affected_rows==1) {//si se añade a la tabla
    echo "Usuario ".$user." eliminado con exito<br>";

  }else{//si no se añade a la tabla
    echo "Error desconocido";
  }
  ?>
  <a href="<?php $_SERVER["PHP_SELF"]; ?>">Volver</a>
  <?php

}else{
  ?>
  <h4>Eliminar usuario</h4>
  <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="usuario">USUARIO A ELIMINAR: </label><br>
    <input type="text" name="usuario" placeholder="Usuario que quieres borrar"><br><br>
    <input type="submit" name="eliminar" value="eliminar">
  </form>


  <?php
  $id = new mysqli("127.0.0.1", "root", "", "dwes");
  $id->real_query("SELECT * FROM usuario");//ascendente
  $result = $id->store_result();
  while ($fila = $result->fetch_assoc()) {
    echo " usuario = " . $fila['login'] . "<br>";
    echo " pwd = " . $fila['clave'] . "<br>";
  }
}




?>
