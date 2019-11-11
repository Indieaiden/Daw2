<?php
require("./header.php");
?>

<?php 
	$a = 5;
	$b = 7;
	echo("Valor a = ".$a."<br/>");
	echo("Valor b = ".$b."<br/><br/>");
	echo("a + b = ".($a+$b)."<br/>");
	echo("a - b = ".($a-$b)."<br/>");
	echo("a * b = ".($a*$b)."<br/>");
	echo("a / b = ".($a/$b)."<br/>");
?>

<?php
include("footer.php");
?>