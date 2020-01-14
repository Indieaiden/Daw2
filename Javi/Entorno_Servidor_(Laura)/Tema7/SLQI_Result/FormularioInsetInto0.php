

<?php
function filtrado($datos){
  $datos= trim($datos); //Elimina espacios antes y despues
  $datos= stripslashes($datos); //Elimina \ para que no te joda el codigo
  $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
  return $datos;
}

if (isset($_POST["Enviar"])) {
  $user = filtrado($_POST["usuario"]);
  $pwd = filtrado($_POST["contrasenia"]);

  $id = new mysqli("127.0.0.1", "root", "", "dwes");
  $aniadir = $id->real_query("insert into usuario values(\"".$user."\",\"".$pwd."\")");

  if ($id->affected_rows==1) {//si se añade a la tabla
    echo "Usuario ".$user." añadido con exito<br>";
  }else{//si no se añade a la tabla
    echo "Error desconocido";
  }
  ?>
  <a href="<?php $_SERVER["PHP_SELF"]; ?>">Volver</a>
  <?php

}else{
  ?>
  <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="usuario">USUARIO: </label>
    <input type="text" name="usuario" placeholder="nombre de usuario"><br>
    <label for="contrasenia">CONTRASEÑA: </label>
    <input type="password" name="contrasenia" placeholder="Contraseña de usuario"><br>
    <input type="submit" name="Enviar" value="Enviar">
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
