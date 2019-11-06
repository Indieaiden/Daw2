<?php
//crea una funcion para saber si un cliente es habitual si lo es se le realizara un descuento del 10%
function habitual($compra){	

	static $contador=1;
	$contador++;

	if($contador>10){
		
		echo "cliente habitual oferta descuento";
		echo "precio final de la compra".$compra*0.1;
	} else{
		echo "no es un cliente habitual";
		echo " las veces que ha estado en el establecimiento son ".$contador."</br>";
	}
	
}
$compra=900;

	habitual($compra);
	habitual($compra);
	habitual($compra);
	habitual($compra);
?>