<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Ejercicios Extra </Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
	//Ejercicio 18
	/* el @ antes del GET sirve para que no muestre los fallos pero 
	en este caso hemos hecho el isset 
	para evitar fallos no es necesario, 
	el isset sirve para comprobar si 
	está cargada la variable antes de hacer el get
	*/
	if(isset($_GET['x']))
		$x = $_GET['x'];
	switch($x){
		case 1:
		case 2:
		case 3:
			echo "T1";
		break;
		case 4:
		case 5:
		case 6:
			echo "T2";
		break;
		case 7:
		case 8:
		case 9:
			echo "T3";
		break;
		case 10:
		case 11:
		case 12:
			echo "T4";
		break;
		default: 
			echo "Estas suspenso";
		break;
	}
	echo'<br>';
	echo'<br>';
	//Ejercicio 19
	/*
	Dado dos números, calcular la división entera, comprobando primero que los
	números son positivos, que el primero es mayor que el segundo y que el divisor
	es distinto de 0. Dar mensajes de error adecuados en función del fallo. Hacer el
	ejercicio utilizando @ y die.
	*/
		$div = @$_REQUEST['divisor'] or die('no se ha encontrado el divisor <br>');
		$uke = @$_REQUEST['dividendo'] or die('no se ha encontrado el dividendo <br>');
		
		if($div > 0){
			echo "El divisor es positivo <br>";
			if($uke > 0){
				echo"El dividendo es positivo <br>";
				if($uke > $div){
					if($div != 0){
						echo"La division de $uke/$div = ".($uke/$div)."<br>" ;
					}
					else{
						echo"El divisor es 0 <br>";
					}
				}
				else{
					echo"El divisor es mayor del dividendo <br>";
				}
			}
			else{
				echo"El dividendo no es positivo <br>";
			}
		}
		else{
			echo"El divisor no es positivo <br>";
		}
		echo'<br>';
		echo'<br>';
	//Ejercicio 20
	/*
	Dados dos números calcular el módulo de dos números enteros: si el resultado
	es 0, indicar división exacta, si el resultado es 1, indicar sobra 1, si el resultado
	es 2 indicar sobran 2. En cualquier otro caso indicar sobran más de 2. Utilizar
	un switch.
	*/
		$primera = @$_REQUEST['variable1'];
		$segunda = @$_REQUEST['variable2'];
		$modulo = $primera%$segunda;
		switch($modulo){
			case 0:
				echo "División Exacta <br>";
			break;
			case 1:
				echo "Sobra 1 <br>";
			break;
			case 2:
				echo "Sobran 2 <br>";
			break;
			default:
				echo "Sobran mas de dos <br>";
			break;
		}
		echo'<br>';
		echo'<br>';
		
	//Ejercicio 21
	/*
	Dado un array inicializado con 10 números reales y calcular y visualizar su
	media. (Uso de for)
	*/
	
	$media = array(1,2,3,4,5,6,7,8,9,10);
	$setEspaña = 0;
	foreach($media as $valor){
			$setEspaña += $valor;
	}
	echo"La media del array es: ".($setEspaña/count($media));
	echo'<br>';
	echo'<br>';
	
	//Ejercicio 22
	/*
	Utilizando el bucle for y un break. Calcula si un número es primo o no.
	Nota: Recuerda que un número es primo si no tiene divisores, en el momento
	en que encuentres un divisor ya no será primo y podrás cortar la ejecución.
	*/
	$brother = 1762426823681235612789461247916742346712646944167233;
	$bool = true;
	for($i=2;$i<$brother;$i++){
		if(($brother%$i) === 0){
			echo"la cifra no es prima <br>";
			$bool = false;
			break;
		}
	}
	if($bool){
			echo"la cifra es prima <br>";
	}
	echo'<br>';
	echo'<br>';
	
	//Ejercicio 23
	/*
	Calcula los divisores de un número entero positivo.
	*/
	$sister = 15;
	$divisores = array(1);
	for($i=2;$i<$sister;$i++){
		if(($sister%$i) === 0){
			$divisores[]=$i;
		}
	}
	echo "Divisores: <br>";
	foreach($divisores as $valor){
			echo"$valor <br>";
	}
	echo'<br>';
	echo'<br>';
	
	
	//Ejercicio 24
	/*
	Dado un par de números (ejemplo 7 y 4), y una operación +, -, * y / (ejemplo
	+), calcular el resultado (ejemplo 11). Utilizar switch.
	*/
	$num1  = 7;
	$num2  = 4;
	$operacion = "+";
	
	
		switch($modulo){
			case "+":
				echo $num1 + $num2."<br>";
			break;
			case "-":
				echo $num1 - $num2."<br>";
			break;
			case "*":
				echo $num1 * $num2."<br>";
			break;
			case "/":
				echo $num1 / $num2."<br>";
			break;
			default:
				echo "Operacion no valida";
			break;
		}
	echo'<br>';
	echo'<br>';
	
	
	//Ejercicio 25
	/*
	En un archivo funciones.inc incluir las funciones definidas es_primo() (ejercicio
	4) y divisores() (ejercicio5). Realizar una página php que incluya este archivo
	funciones.inc, y que haga llamadas a estas funciones del archivo. En concreto
	visualizar los 10 primeros numerous primos.
	*/
	include("funciones.inc");
	$cont=0;
	$parametros=0;
	do{
		$parametros++;
		if(es_primo($parametros)){
			$cont++;
			echo"$parametros <br>";
		}
	}
	while($cont<10);
	echo'<br>';
	echo'<br>';
	
	
	//Ejercicio 25
	/*
	Hallar los 20 primeros múltiplos de 5 y de 7
	*/
	echo"Multiplos de 5: <br>";
	for($i=1;$i<=20;$i++){
		echo 5*$i."<br>";
	}
	echo"<br>";
	echo"Multiplos de 7: <br>";
	for($i=1;$i<=20;$i++){
		echo 7*$i."<br>";
	}
		?>
	</body>
</html>