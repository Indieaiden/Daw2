<?php
require("./header.php");
?>

<?php 
	echo("<h1>Tabla del 5</h1>");
	echo('<table>');
	for($z=0;$z<10;$z++){
		echo("<tr>");
		echo("<td>5 x ".$z." = ".(5*$z)."</td>");
		echo("</tr>");
	}
	echo("</table>");

?>

<?php
include("footer.php");
?>