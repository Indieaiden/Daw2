<?php 

include 'header.php';
$numero=mt_rand(1,10);
	
	echo "<table>";		
		for($u=0;$u<=10;++$u){
		echo "<tr>";
		echo "<td>".$numero ." * ".$u." = ".$numero*$u."</td>";
		echo "</tr>";	
		}
					
echo "</table>";
include './footer.php';
?>