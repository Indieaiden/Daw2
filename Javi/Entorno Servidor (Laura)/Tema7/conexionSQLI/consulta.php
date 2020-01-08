<?php
//conexion
$idConex = mysqli_connect("127.0.0.1","root","","dwes");//ip, usuario,contraseña,database

//Operacion: consulta
$consulta = "select login, clave from usuario";
$res= mysqli_query($idConex, $consulta);

//Procesar consulta

$numfilas = mysqli_num_rows($res);
for ($i=0; $i < $numfilas; $i++) {
  $fila = mysqli_fetch_assoc($res);
  echo $fila['login'].'---'.$fila['clave']."<br>";
}

//Cerrar la conexion
$ok = mysqli_free_result($res);
mysqli_close($idConex);

 ?>
