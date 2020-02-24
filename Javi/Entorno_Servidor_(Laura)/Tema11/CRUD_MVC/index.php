<?php
include_once("header.php");
creaHeader("Index MVC");
?>
<h1>Modelo vista controlador</h1>
<div class="">
  Carpetas:
  <a href="MVC/Controlador">contr</a>
  <a href="MVC/Modelo">mod</a>
  <a href="MVC/Vista">vist</a><br>
</div>
<?php
require_once("MVC/Controlador/salarios_controlador.php");

include_once("footer.php");
?>
