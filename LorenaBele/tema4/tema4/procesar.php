<?php
include "../../tema2/header.php";

function nif($dni){
	
	$file="log.txt";
	$fp =fopen ($file,"r+");
	$tiempo= date("h:i:s",time());
	fwrite($fp,$tiempo);
	$texto="Línea : ". __LINE__ . " ".
	"Ruta : " . __FILE__ ." ".
	"Directorio: ". __DIR__ . " ".
	"Función: ". __FUNCTION__ . " ";
	
	fwrite($fp,$texto);
	fwrite($fp,PHP_EOL);
	fclose($fp);
	
	$letras =  array ("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
	$dni=$dni%23;
	
	return $letras[$dni];
	
}
if(empty($_POST["dni"])){
	
	echo "error al introducir el dni";
	echo"<br/><a href=\"saber_nif.html\">ir al formulario <a/>";
}else{
	$dni=$_POST["dni"];
	$patron="/^[0-9]{8}$/";
	if(!preg_match($patron,$dni)){
		echo" error se han introducido letras o simbolos";
		echo"<br/><a href=\"saber_nif.html\">ir al formulario <a/>";
	}else{
		echo "el dni es ".$dni.nif($dni);
		
		
		
	}
}
	


include "../../tema2/footer.php";

?>