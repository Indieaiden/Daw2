<?php
include_once("header.php");
creaHeader("Index MVC");
?>
<h1>Modelo vista controlador</h1>
<div class="">
  <h4>navegar carpetas:</h4>
  <br>
  <a href="MVC/Controlador">contr</a>
  <a href="MVC/Modelo">mod</a>
  <a href="MVC/Vista">vist</a>
</div>
<?php
require_once("MVC/Controlador/Productos_controlador.php");



include_once("footer.php");
?>
