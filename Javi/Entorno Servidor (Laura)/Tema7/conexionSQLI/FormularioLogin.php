

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
  $esusuario = false;
  $escontraseña = false;
  //conexion
  $idConex = mysqli_connect("127.0.0.1","root","","dwes");//ip, usuario,contraseña,database
  //Operacion: consulta
  $consulta = "select login, clave from usuario";
  $res= mysqli_query($idConex, $consulta);
  //Procesar consulta
  $numfilas = mysqli_num_rows($res);
  for ($i=0; $i < $numfilas; $i++) {
    $fila = mysqli_fetch_assoc($res);
    $monus = $fila['login'];
    $monpwd = $fila['clave'];
  }

  //Cerrar la conexion
  $ok = mysqli_free_result($res);
  mysqli_close($idConex);

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
