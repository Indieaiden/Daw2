<?php
include_once("ConectaBDSingleton.php");

try {
  $db = ConectaBDSingleton::singleton();

  $desde = 0;
  $cuantos = 3;
  $paginappal = 1;
  $consultaTotal = count($db -> consultarDatos());
  $totalPaginas = ceil($consultaTotal/$cuantos);

  $consultaPaginada = $db -> consultarDatos($desde,$cuantos);

  foreach ($consultaPaginada as $resultado) {
    echo "ID: ".$resultado["idFabricante"].$resultado["idProducto"].", Descripcion: ".$resultado["descripcion"]."<br>";
  }
  echo $totalPaginas ;

} catch (Exception $e) {
  "Error al ejecutar consulta en PAGINACION.PHP  : " . $e->getMessage() . "<br/>";
}

?>
