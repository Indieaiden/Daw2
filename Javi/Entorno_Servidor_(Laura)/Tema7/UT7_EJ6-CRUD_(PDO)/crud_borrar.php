<?php
/*
* Pagina fugaz que simplemente realiza la consulta (ver mover al index y evitar esta pagina)
* $primaryKey = strtolower($_GET['dni']);
* sentencia borrado: "delete from salario where lower(dni_empleado)='$primaryKey';"
*/
include_once('ConectaBDSingleton.php');

$primaryKey = $_GET['dni'];
$cone = ConectaBDSingleton::singleton();//reutilizamos la conexion singleton para poder hacer la consulta
$cone->consulta1("delete from salario where lower(dni_empleado)='$primaryKey';");
header("Location: index.php");//automaticamente redirecciona al index
 ?>
