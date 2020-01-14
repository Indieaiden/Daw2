<?php
require("./header.php");
?>

<?php 
	$nenes = 50;
	$nenas = 45;
	$alumnos = $nenes + $nenas;
	$pcnenes = ($nenes * 100)/$alumnos;
	$pcnenas = ($nenas * 100)/$alumnos;
	echo("Hay ".$nenes." niños</br>");
	echo("Hay ".$nenas." niñas</br>");
	echo("Haciento un total de ".$alumnos."</br>");
	echo("el porcentaje de niños es ");printf("%'10.2f",$pcnenes);
	echo("</br>el porcentaje de niñas es ");printf("%'10.2f",$pcnenas);
?>

<?php
include("footer.php");
?>