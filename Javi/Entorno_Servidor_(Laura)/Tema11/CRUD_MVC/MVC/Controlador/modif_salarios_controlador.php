<?php

include_once('MVC/Modelo/ConectaBDSingleton.php');
include_once('MVC/Modelo/Filtrado.php');

$cone = ConectaBDSingleton::singleton();//reutilizamos la conexion singleton para poder hacer la consulta

if (!empty($_POST['acttot'])) {
  $primaryKey = Filtrado::filtrado(strtolower($_POST['dni']));
  $nombre = Filtrado::filtrado(ucfirst(strtolower($_POST['nombre'])));
  $puesto = Filtrado::filtrado($_POST['puesto']);
  $sueldo = Filtrado::filtrado($_POST['sueldo']);
  $actualizar = $cone->actualizaDatos($primaryKey,$nombre,$puesto,$sueldo);
  header("Location: index.php");
}else{
  require_once("MVC/Vista/modif_salarios_view.php");//la vista se carga completamente junto con los datos anteriores
  }

 ?>
