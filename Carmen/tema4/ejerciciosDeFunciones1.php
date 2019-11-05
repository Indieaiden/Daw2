<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejercicios tema 4</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<h1>Ejercicio 1 </h1>
		
		<?php
			
			function espar($num){
				
				if($num%2 == 0){
					echo "El numero es par";
				}else{
					echo "El numero es impar";
				}
				
			}
			espar(5);

		?>
	
		<h1>Ejercicio 2 </h1>
		
		<?php
			
			function ej2(){
				$numeros = func_num_args();
				$argumentos = func_get_args();
				for($i = 0 ; $i < $numeros ; $i++){
					if($argumentos[$i] == 0){
						echo "El numero es $argumentos[$i], no puede ser par o impar <br/>";
						
					}elseif($argumentos[$i]%2 === 0){
						
						echo "El numero $argumentos[$i],es par <br/>";
					}else{
						
						echo "El numero $argumentos[$i], es impar <br/>";
					}
				}				
			}
			ej2(5,6,2,4,31,0);

		?>		
		
		<h1>Ejercicio 3 </h1>
		
		<?php
			
			function suma(&$num){
				
				$num++;
				
			}
			$numerito = 3;
			suma($numerito);
			echo "$numerito <br/>";
			suma($numerito);
			echo "$numerito <br/>";
			suma($numerito);
			echo "$numerito <br/>";

		?>
		<h1>Ejercicio 4 </h1>
		
		<h1>Ejercicio 5 </h1>
		
	</body>
</html>