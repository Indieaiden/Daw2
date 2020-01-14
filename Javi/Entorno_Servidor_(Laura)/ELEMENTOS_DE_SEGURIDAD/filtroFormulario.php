<?php 
function filtrado($datos){
	$datos= trim($datos); //Elimina espacios antes y despues
	$datos= stripslashes($datos); //Elimina \ para que no te joda el codigo
	$datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
	return $datos;
}
?>
