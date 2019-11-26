<?php

define('ADMINISTRADOR','1');
define('REGISTRADO','2');
define('ERROR_NOREGISTRADO','-1');
define('ERROR_PASSWORD','-2');
define('ERROR_EXPIRADO','-3');

function validarUser($login,$contrasena){
	$codigo=null;
	$user=true;
	$datos=array("Lucia"=>array("contraseña"=>"lucia","fecha"=>strtotime("23-11-2029"),"tipo"=>ADMINISTRADOR),
				 "Paco"=>array("contraseña"=>"paco","fecha"=>strtotime("23-11-2019"),"tipo"=>REGISTRADO));
	
	if(array_key_exists($login,$datos)){
		if(in_array($contrasena,$datos[$login])){
			if(strtotime(date("d-m-Y"))<$datos[$login]["fecha"]){
				$codigo=$datos[$login]["tipo"];
				
			}else{
						$codigo=ERROR_EXPIRADO;
					}
		}else{
						$codigo=ERROR_PASSWORD;
					}	

	}else{$codigo=ERROR_NOREGISTRADO;}
	return $codigo;
}

?>