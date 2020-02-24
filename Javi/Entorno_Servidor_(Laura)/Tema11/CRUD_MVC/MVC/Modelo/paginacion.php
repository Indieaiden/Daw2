<?php
$arrayDatos = $cone->consultarDatos();//ascendente
//----calculo paginacion
try {

  $paginappal=0;
  $cuantos = 4;//cantidad a mostrar del limit
  if (!isset($_GET['p'])) {
    $paginappal = 1;
  }else {
    $paginappal = $_GET['p'];
  }
  $desde = ($paginappal-1)*$cuantos;//inicio del limit calculado a partir de que pagina estamos
  $consultaTotal = count($arrayDatos);//consulta sin limit para obtener el total
  $totalPaginas = ceil($consultaTotal/$cuantos);//ceil que si no nos da menos paginas de las que habria

  $consultaPaginada = $cone -> consultarDatos($desde,$cuantos);//consulta paginada

  echo "pagina ".$paginappal." de ".$totalPaginas." <br>";

} catch (Exception $e) {
  "Error al ejecutar consulta en PAGINACION.PHP  : " . $e->getMessage() . "<br/>";
}

$arrayDatosPaginado = $cone->consultarDatos($desde,$cuantos);//ascendente

 ?>
