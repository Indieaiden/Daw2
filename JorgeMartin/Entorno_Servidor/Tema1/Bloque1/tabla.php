<?php


echo "<table border>";
for($i=0;$i<=10;++$i){
	
	echo "<tr>";
				
		for($u=0;$u<11;++$u){
		$numero=mt_rand(1,10);
		echo ("<td>".$numero."</td><td> * </td><td>".$u."</td><td> = </td><td>".$numero*$u."</td>");
		}
					
	echo "</tr>";	
}
echo "</table>";
?>