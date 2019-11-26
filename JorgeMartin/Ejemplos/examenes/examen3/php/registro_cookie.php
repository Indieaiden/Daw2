<?php

function registroCookie($nombre,$valor){
	
	if(isset($_COOKIE[$nombre])){
		foreach($_COOKIE as $clave => $valor){
			if($clave==$nombre){
				return " valor ".$valor;
			}
		}	
	}else{
		setcookie($nombre,$valor);
		
		$file="log.txt";
		$fp =fopen ($file,"a+");	
		$texto="Nombre del fichero". __FILE__ . "|".
		"Lina". __LINE__ .  "|".
		"Nombre de la cookie ".$nombre. "|" .
		"Valor : " .$valor."|".
		"Opcion elegida: ".__FUNCTION__ ."|";
			
		fwrite($fp,$texto);
		fwrite($fp,PHP_EOL);
		fclose($fp);
		}
}

echo registroCookie("lorena",15);
echo registroCookie("jessi",15);
echo registroCookie("pablo",15);


?>