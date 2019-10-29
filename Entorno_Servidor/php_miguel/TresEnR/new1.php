<?php
	$colTablero = array(0,0,0);
	$rowTablero = array($colTablero,$colTablero, $colTablero );
	echo '<pre>';
	print_r($rowTablero);
	$colTablero[0]=3;
	print_r($rowTablero);
	$rowTablero[1][2]=5;
	print_r($rowTablero);
	echo '</pre>';
	
	for($i= 0 ; $i < 3; $i++  ){
		for($j=0;$j<3;$j++){
			echo $rowTablero[$i][$j] ;
		}
		echo'<br>';
	}
?>	
		