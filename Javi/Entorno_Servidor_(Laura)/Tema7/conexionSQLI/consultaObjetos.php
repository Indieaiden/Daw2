<?php
//conexion
$idConex = new mysqli("127.0.0.1","root","","dwes");//ip, usuario,contraseña,database
if ( $idConex->connect_errno ) { // Sí el código de error es distinto de 0
  echo "Fallo al conectar a MySQL: " . $idConex->connect_error ; // muestra mensaje del error
}
//Operacion: consulta
$consulta = "select login, clave from usuario";
$res= $idConex->query($consulta);

//Procesar consulta

$numfilas = $idConex->affected_rows;
echo $idConex->affected_rows."<br>";
$res-> data_seek(0);
for ($i=0; $i < $numfilas; $i++) {
  $fila = $res->fetch_assoc();
  echo $fila['login'].'---'.$fila['clave']."<br>";
}

//Cerrar la conexion
$ok = mysqli_free_result($res);
$idConex -> close();
?>
