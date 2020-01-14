<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
  $Id = new mysqli("127.0.0.1", "root", "", "dwes");
  if ($Id ->connect_errno) {
    echo "Falló conexión a MySQL: (" . $Id ->connect_errno . ") " . $Id ->connect_error;
  }
  if ( ! $Id ->query( "DROP TABLE IF EXISTS test") || ! $Id ->query("CREATE TABLE test(n INT)") ||
  ! $Id ->query( "INSERT INTO test VALUES (1), (2), (3)") ) {
    die("Falló la creación de la tabla: (" . $Id->errno . ") " . $Id->error);
  }
  // Ejecuta sentencia almacenando resultados en buffer
  $result = $Id->query( "SELECT n FROM test ORDER BY n DESC" );//descendente
  echo "Muestra conjunto de resultados...<br>";
  $result->data_seek(0);
  while ($fila = $result->fetch_assoc()) {
    echo " n = " . $fila['n'] . "<br>";
  }
  // Ejecuta sentencia NO almacenando resultados en buffer
  $Id->real_query("SELECT n FROM test ORDER BY n ASC");//ascendente
  $result = $Id->store_result();
  echo "Muestra datos en orden ascendente...<br>";
  while ($fila = $result->fetch_assoc()) {
    echo " n = " . $fila['n'] . "<br>";
  }
  //solo por tenrela, no sirve de nada en este ejemplo
  function filtrado($datos){
  	$datos= trim($datos); //Elimina espacios antes y despues
  	$datos= stripslashes($datos); //Elimina \ para que no te joda el codigo
  	$datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
  	return $datos;
  }
  ?>

</body>
</html>
