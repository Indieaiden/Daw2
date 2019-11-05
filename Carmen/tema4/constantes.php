<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Constantes</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php	
			function esPar($num){
				$fichero = fopen("./log/log.txt","a");
				
				$hora = date("d/m/Y - H:i:s");
				if($num%2 == 0){
					$valor = "Es par <br>";
					
					
				}else{
					
					$valor = "Es impar <br>";
				}
				
				fwrite($fichero, $hora);
				fwrite($fichero,' '. __FILE__. ' ');
				fwrite($fichero,' '. __FUNCTION__. ' ');
				fwrite($fichero,PHP_EOL);
				fclose($fichero);
				echo $valor;
			}
							
			esPar(5);
			esPar(8);
			
		?>
	</body>
</html>