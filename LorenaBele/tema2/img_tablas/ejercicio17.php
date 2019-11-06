<?php
include '../Include/header.php';

//echo '</tr></table>';*/
$dir='C:\xampp\htdocs\tema2\php\fotos';
//Comprueba si $dir es un directorio
if(is_dir($dir)){
	//si puede abrir el gestor del directorio
	if ($gestor_dir = opendir($dir)){
		echo "<table>";
		echo "<tr>";
		for($i=0;$i<4;$i++){
			//si la lectura de entrada no es false
			if (($file = readdir($gestor_dir)) !== false ){
				//si $file no es "." ni ".."
				if ($file!="." && $file!=".."){
					//pone la foto en la celda correspondiente
					echo "<td><img src=\"fotos/$file\"></a></td>";
				//si $file es "." o ".."
				}else{
					//resta 1 a $i porque si no la tabla quedaria (.|..|imagen1|imagen2) y no llegaria a leer imagen3 ni imagen4
					$i--;
				}
			}
		}
	echo "</tr>";
	echo "</table>";
	closedir($gestor_dir);
}
	
}

include '../Include/footer.php';
?>