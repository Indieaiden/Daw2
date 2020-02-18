<?php
include_once("header.php");
creaHeader("Index MVC");
 ?>
    <h1>Modelo vista controlador</h1>
    <div class="">
      navegar carpetas:<br>
      <a href="MVC/Controlador">contr</a>
      <a href="MVC/Modelo">mod</a>
      <a href="MVC/Vista">vist</a>
    </div>
    <?php
    require_once("MVC/Controlador/Productos_controlador.php");
    ?>
  </body>
</html>
