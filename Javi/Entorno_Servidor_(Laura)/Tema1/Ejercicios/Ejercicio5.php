<?php
require("./header.php");
?>

<?php 
	$nombre = "Javier";
	$apellido = "Fernández Navarro";
	$direccion = "Calle falsa, 123";
	$telefono = " 697796679";
	echo("<table>");
	echo("<tr><th>Datos del alumono</th></tr>");
	echo("<tr><td>$nombre</td></tr>");
	echo("<tr><td>$apellido</td></tr>");
	echo("<tr><td>$direccion</td></tr>");
	echo("<tr><td>$telefono</td></tr>");
	echo("</table>");
?>

<?php
include("footer.php");
?>