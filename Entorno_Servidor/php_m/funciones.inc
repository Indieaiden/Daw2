<?php
function es_primo($num){
	$brother = $num;
	$bool = true;
	if($brother == 1)
		return $bool;
	if($brother == 2)
		return $bool;
	for($i=2;$i<$brother;$i++){
		if(($brother%$i) === 0){
			$bool = false;
			return $bool;
		}
	}
	return $bool;
}

function divisores($num){
	for($i=2;$i<$sister;$i++){
		if(($sister%$i) === 0){
			$divisores[]=$i;
		}
	}
	foreach($divisores as $valor){
			echo"$valor <br>";
	}
}
?>