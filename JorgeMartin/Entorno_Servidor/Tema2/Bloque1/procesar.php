<?php
  /*Hay que hacer las comprobaciones de que los
  datos llegan, o poner los required*/
  //Para comporbar, con isset(); DONE

  //Si nombre está puesto
  if (isset($_POST["nombre"])) {
    echo $_POST["nombre"] . "</br>";
  }
  else {
    echo "error de formulario vacío" . "</br>";
  }

  if (isset($_POST["nacido"])) {
    echo $_POST["nacido"] . "</br>";
  }
  else {
    echo "error de formulario vacío" . "</br>";
  }

  if (isset($_POST["hm"])) {
    echo $_POST["hm"] . "</br>";
  } else {
    echo "error de formulario vacío" . "</br>";
  }
 ?>
