<?php
//DEFINICIÓN DE CONSTANTES
	if (!defined('ADMINISTRADOR')){
		define ('ADMINISTRADOR', 1);
	}
	if (!defined('REGISTRADO')){
		define ('REGISTRADO', 2);
	}
	if (!defined('ERROR_NOREGISTRADO')){
		define ('ERROR_NOREGISTRADO', -1);
	}
	if (!defined('ERROR_PASSWORD')){
		define ('ERROR_PASSWORD', -2);
	}
	if (!defined('ERROR_EXPIRADO')){
		define ('ERROR_EXPIRADO', -3);
	}
//DEFINICIÓN DE FUNCIONES

function filtrado($datos){
	$datos = trim($datos);
	$datos = stripslashes ($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}

function validarUser( $login, $pass){
	
	$nivel = ERROR_NOREGISTRADO;
	
	$juan = array('pass'=>'1234', 'caduca'=> mktime(0, 0, 0, 12, 15, 2019), 'nivel'=>ADMINISTRADOR);
	$pepe = array('pass'=>'1234', 'caduca'=> mktime(0, 0, 0, 12, 03, 2019), 'nivel'=>REGISTRADO);
	$ana = array('pass'=>'1234', 'caduca'=> mktime(0, 0, 0, 12, 06, 2018), 'nivel'=>REGISTRADO);
	
	$usuarios = array ( 'juan'=>$juan, 'pepe'=> $pepe, 'ana'=> $ana);
	ver2( "usuario($login, $pass)");
	
	if (array_key_exists($login, $usuarios)){
		ver2("existe");
		//realizar comprobaciones de validación.
		$logeado= $usuarios[$login];
		ver($logeado);
		//contraseña
		if (strcmp($logeado['pass'], $pass)!=0){
			ver2("la contraseña no es igual");
			//error contraseña
			echo "la contraseña no es igual".$logeado['pass']. " y ". $pass. "<br>";
			$nivel= ERROR_PASSWORD;
		}else{
			ver2("la contraseña es igual");
			//tiempo de validez
			$caduca = $logeado['caduca'];
			$hoy = time();
			ver2("caduca: $caduca");
			ver2("hoy:$hoy");
			if ($caduca < $hoy){
				ver2("caducado...........");	
				echo $caduca. '<br>';
				echo $hoy. '<br>';
				$nivel = ERROR_EXPIRADO;
			}else{
				ver2("Usuario con fecha válida");
				$nivel  = $logeado['nivel'];
			}
		}
	} else{
		echo "no existe";
		//lpg.log.
		echo $login;
		ver($usuarios);
		$nivel=ERROR_NOREGISTRADO;
	}
	echo $nivel;
	return $nivel;	
	
}
function registro_log($usuario, $hora, $opcion){
	$f = fopen("registro.log", "a+");
	$i = fwrite($f, "$usuario - $hora: $opcion\r\n");
	fclose($f);
}
function ver($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
function ver2($msg){
	echo $msg.'<br>';
}
?>
