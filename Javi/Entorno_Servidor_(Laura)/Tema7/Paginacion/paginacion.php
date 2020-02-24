<?php
include_once("ConectaBDSingleton.php");

try {
  $db = ConectaBDSingleton::singleton();

  $paginappal;
  $cuantos = 5;//cantidad a mostrar del limit
  if (!isset($_GET['p'])) {
    $paginappal = 1;
  }else {
    $paginappal = $_GET['p'];
  }
  $desde = ($paginappal-1)*$cuantos;//inicio del limit calculado a partir de que pagina estamos
  $consultaTotal = count($db -> consultarDatos());//consulta sin limit para obtener el total
  $totalPaginas = ceil($consultaTotal/$cuantos);//ceil que si no nos da menos paginas de las que habria

  $consultaPaginada = $db -> consultarDatos($desde,$cuantos);

  echo "tenemos ".$consultaTotal." registros<br>";
  echo "mostramos ".$cuantos." registros <br>";
  echo "pagina ".$paginappal." de ".$totalPaginas." <br>";
  foreach ($consultaPaginada as $resultado) {
    echo "ID: ".$resultado["idFabricante"].$resultado["idProducto"].", Descripcion: ".$resultado["descripcion"]."<br>";
  }

} catch (Exception $e) {
  "Error al ejecutar consulta en PAGINACION.PHP  : " . $e->getMessage() . "<br/>";
}
?>
<form class="paginacion" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
  <?php
  for ($i=1; $i <= $totalPaginas ; $i++) {
    ?>
    <input type="submit" name="<?php echo "p"; ?>" value="<?php echo $i; ?>">
    <?php
  }
  ?>
</form>
<?php

?>
