<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Sesion contador</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
	<?php		
		function validaUser($login,$contrasena){
			$validados = 0;
			define("ADMINISTRADOR",1);
			define("REGISTRADO",2);
			define("ERROR_NOREGISTRADO",-1);
			define("ERROR_PASSWORD",-2);
			define("ERROR_EXPIRADO",-3);
			$dateRed = date_create('2000-12-10');
			$dateAdmin = date_create('2003-10-11');
			$datehoy = date_create('');
			$array = array("red" => array("contrasena" => "1234", "fechaDeExpiracion" => "$dateRed", "Tipo" => "REGISTRADO"),
					'gold' => array("contraseña" => "1234", "fechaDeExpiracion" => "$dateAdmin", "Tipo" => "ADMINISTRADOR")
			);
			foreach($array as $i=>$value){
				if($login==$i){
					if($contrasena==$value['contrasena']){
						if($datehoy > $value['fechaDeExpiracion']){
							if(strcmp($value['contrasena'],'REGISTRADO')==0){
								$validados = constant('REGISTRADO');
							}elseif(strcmp($value['contrasena'],'ADMINISTRADOR')==0){
								$validados = constant('ADMINISTRADOR');
							}
						}
						else{
							$validados = constant('ERROR_EXPIRADO');
						}
					}
					else{
						$validados = constant('ERROR_PASSWORD');
					}
				}else{
					$validados = constant('ERROR_NOREGISTRADO');
				}
			}
			return $validados;
		}
		?>
	</body>
</html>