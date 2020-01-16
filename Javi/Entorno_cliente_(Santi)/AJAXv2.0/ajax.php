<?php
function mostrar(){
  $nombres = array("Javier","Rafael","Lorena","Pablo","Adrian");
  $apellidos = array("Fernandez","Ruiz","Beleña","Parra","Pavel");

  setcookie("nombres","Javier,Rafael,Lorena,Pablo,Adrian");
  setcookie("apellidos","Fernandez,Ruiz,Beleña,Parra,Pavel");

}
mostrar()
?>
