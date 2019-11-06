<?php

include "../../tema2/header.php";

$dir='fotos';
if(is_dir($dir)){
	//si puede abrir el gestor del directorio
	if ($gestor = opendir($dir)){
		echo "<table>";
		echo "<tr>";
		$i=0;
		while (($archivo = readdir($gestor))){
			if ($archivo!="." && $archivo!=".."){
				if ($i==4){
					$i=0;
					echo "</tr>";
					echo "<tr>";
				}
				$i++;
				echo "<td>";
				echo "<a href=\"fotos/$archivo\"><img style=\" width: 100px; height: 100px;\" alt=\"foto\" src=\"fotos/$archivo\"></a>";
				echo "</td>";
			}
		}
	while($i<4){
		echo "<td></td>";
		++$i;
	}
	echo "</tr></table>";
	closedir($gestor);
	}
}
include "../../tema2/footer.php";
?>