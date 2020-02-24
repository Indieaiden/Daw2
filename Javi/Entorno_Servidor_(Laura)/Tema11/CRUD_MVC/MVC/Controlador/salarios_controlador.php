<?php
require_once("MVC/Modelo/Salarios_modelo.php");
require_once("MVC/Modelo/Filtrado.php");
//El orden es importante
$cone = ConectaBDSingleton::singleton();

include_once("MVC/Modelo/paginacion.php");//primero carga la paginacion gracias a la coexion

if (!empty($_POST['aniadir'])) {
  $flag=true;
  if (empty($_POST['dni'])) {
    echo "<p>El campo DNI no puede estar vacio!</p>";
    $flag=false;
  }elseif(strlen($_POST['dni'])>10){
    echo "<p>El campo DNI no contener mas de 10 caracteres!</p>";
    $flag=false;
  }
  if (empty($_POST['nombre'])) {
    echo "<p>No has introducido un nombre!</p>";
    $flag=false;
  }
  if (empty($_POST['sueldo'])) {
    echo "<p>No has introducido un sueldo!</p>";
    $flag=false;
  }else if (!is_numeric($_POST['sueldo'])) {
    echo "<p>El sueldo introducido no es un valor numerico (Para decimales se usa le punto) </p>";
    $flag=false;
  }

  if ($flag) {
    $dni = Filtrado::filtrado(strtolower($_POST['dni']));
    $nombre = Filtrado::filtrado(ucfirst(strtolower($_POST['nombre'])));
    $puesto = Filtrado::filtrado($_POST['puesto']);
    $sueldo = Filtrado::filtrado($_POST['sueldo']);

    $aniadido = $cone->introducirDatos($dni,$nombre,$puesto, $sueldo);
    @header("Location: index.php");//automaticamente redirecciona al index
  }
}
require_once("MVC/Vista/salarios_view.php");//la vista se carga completamente junto con los datos anteriores
 ?>
