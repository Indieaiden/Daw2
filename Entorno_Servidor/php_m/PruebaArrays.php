<?php
	/* Primera Funcion*/
	
	function primera(&$a,&$b){
	/* esta funcion  sirve para desordenar un array */
		$cont =0;
		global $numeros;
	
		for ($i = 0; $i<10;$i++){
			$c = $numeros[$a];
			$numeros[$a] = $numeros[$b];
			$numeros[$b] = $c;
			$cont++;
		}
		return $cont;
	}
	$numeros = array(1,2,3,4,5,);
	$random1 = rand(0,4);
	$random2 = rand(0,4);
	
	echo "Se ha desordenado", primera($random1,$random2) , "veces <br>";
	echo "<br>";
	echo "<br>";
	
	/* Segunda Funcion*/
	function dimension($d = 2){
		$e = $d +$d;
		return $e;
	}
	echo dimension(),", en esta dimension deberia ser 4 <br>";
	echo dimension(5),",Pero en esta dimension deberia ser 4 <br>";
	echo "<br>";
	echo "<br>";
	
	/* Tercera Funcion*/
	function escribeLetras (){
		$contador = 0;
		for($i=0; $i<func_num_args(); $i++){
			$contador++;
		echo "estos son las letras escritas: ", func_get_arg($i), '<br>';
		}
		$arr = func_get_args();
	}
	escribeLetras('a');
	escribeLetras('o','b','d','c');
?>