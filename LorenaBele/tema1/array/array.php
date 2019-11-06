<?php
	//array mixto
	$ciudades = array('paris'=>19.168,139=>'londres');
	
	//array indexado
	$paises =array ('españa','francia','italia');
	
	//recorrido del array solo por su valor
	foreach ($paises as $valor){		
		echo $valor."<br/>";
	}
	
	echo "<br/>";
	//recorrido del array por su indice y valor
	foreach ($ciudades as $clave => $valor ){
		echo "su clave es ".$clave ." su valor es " .$valor."<br/>";
	}
	
?>