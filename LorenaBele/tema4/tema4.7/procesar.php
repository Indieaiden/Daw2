<?php
//desde un formulario recibe una cadena y utiliza los distintos metodos pa
if( isset($_POST["cadena1"])and isset($_POST["opcion"])){
	
	$cadena1=$_POST["cadena1"];
	$opciones=$_POST["opcion"];
}else{
	echo "error el dato esta vacio rellene todos los campos";
	echo"<br/><a href=\"formulario.php\">ir al formulario <a/>";
}if(!is_numeric($cadena1)){
	
	if($opciones == "minusculas"){
		echo strtolower($cadena1);
	}elseif($opciones == "longitud"){
		echo strlen($cadena1);
	}elseif($opciones == "mayusculas"){
		echo ucfirst($cadena1);
	}elseif($opciones == "asci"){
		echo ord($cadena1);
	}elseif($opciones == "espacio"){
		echo ltrim($cadena1);
	}elseif($opciones == "extraer"){
		echo substr($cadena1,5);
	}elseif($opciones == "invierte"){
		echo strrev($cadena1);
	}elseif($opciones == "caracteres"){
		echo str_pad($cadena1,5,'@',STR_PAD_BOTH);
	}elseif($opciones == "cadena"){
		$cadena1=strtolower($cadena1);
		echo str_replace('a','e',$cadena1);
	}
}else{
	
	echo "error el dato no es una cadena introduce una valor valido";
	echo"<br/><a href=\"formulario.php\">ir al formulario <a/>";	
}

?>