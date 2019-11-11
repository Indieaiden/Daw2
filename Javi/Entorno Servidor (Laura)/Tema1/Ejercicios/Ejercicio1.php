<?php
require("./header.php");
?>

<?php 
	$a = 1;
	$b = 2;
	echo("la variable a tiene el valor ".$a."<br/>");
	echo("la variable b tiene el valor ".$b."<br/>");
	$c=$a;
	$a=$b;
	$b=$c;
	echo("ahora la variable a tiene el valor ".$a."<br/>");
	echo("y ahora la variable b tiene el valor ".$b."<br/>");
?>

<?php
include("footer.php");
?>