<?php
require_once("MVC/Modelo/Productos_modelo.php");
$producto = new Productos_modelo();
$matrizProductos = $producto->getProductos();
require_once("MVC/Vista/Productos_view.php");

 ?>
<table>
<tr><td class="td-header">Descriocion</td></tr>
<?php
foreach ($matrizProductos as $registro) {
  echo "<tr><td>".$registro["descripcion"]."</td><tr>";
}
 ?>
</table>
