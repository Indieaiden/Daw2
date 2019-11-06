<?php
include 'header.php';

	//
	$a='a';
	$b='b';
	$intercambio=0;
	
	$intercambio=$a;
	$a=$b;
	$b=$intercambio;
	
	echo 'la variable $a su valor es '.$a.'<br/> y $b su valor es '.$b;
	echo '<br/>';
	echo '<br/>';
	
	//
	$n1=mt_rand(1,10);
	$n2=mt_rand(1,6);
	
	echo 'la suma de <u>'.$n1.' + ' .$n2.'</u> es '.( $n1+$n2).'<br/>';
	echo 'la resta de <u>'.$n1.' - ' .$n2.'</u> es '.( $n1-$n2).'<br/>';
	echo 'la division de <u>'.$n1.' / ' .$n2.'</u> es '.round( $n1/$n2).'<br/>';
	echo 'el producto de <u>'.$n1.' y ' .$n2.' </u> es ',$n1*$n2,'<br/>';
	
	//
	$niñas=45.5;
	$niños=55.6;
	echo '<br/>';
	echo 'el porcentaje de niñas es de ';
	printf("%'*10.5f",$niñas);
	echo ' el porcentaje de niños es de ';
	printf("%'*10.5f",$niños).'% <br/>';
	//printf("%'*10.5f",$niñas);
	//
	echo '<br/>';
	$nombre='Pablo';
	$apellido='Rodriguez';
	$direccion='c/sal si puedes';
	$telefono=915050064;
	
	echo '<table>';
	echo '<tr><th colspan="4"> ficha alumno</th></tr>';
	echo '<tr>';
	
		echo '<td> '.$nombre.'</td>';
		echo '<td> '.$apellido.'</td>';
		echo '<td> '.$direccion.'</td>';
		echo '<td> '.$telefono.'</td>';
	
		echo '</tr>';
	echo'</table>';	
	
	//
	
	$n1='Someone you loved';
	$n2='Señorita';
	$n3='Sucker';
	$n4='Contando lunares';
	$n5='Don´t call me up';
	echo '<ol>';
		echo '<li>'.$n1;
		echo '<li>'.$n2;
		echo '<li>'.$n3;
		echo '<li>'.$n4;
		echo '<li>'.$n5;
	echo'</ol>';

	//

	$alumno =array (1=>$nombre,2=>$apellido,3=>$direccion,4=>$telefono);
	
	echo '<table ><tr> <th colspan="4"> ficha alumno</th></tr>';
	echo '<tr>';
	foreach ($alumno as $i =>$valor ){

		echo '<td> '.$valor.'</td>';

	}
		echo '</tr></table>';	
	
	//
	const MONEDA="EURO";
	var_dump( MONEDA);
	get_defined_constants(MONEDA);
	echo"<br/>";
	//
	echo"<br/>";
	$biblioteca= array('libros'=>array(1=>'aprende php','autor'=>'pepe','editorial'=>'santillana','año'=>2012,'en_prestamo'=>True),
						array(2=>'aprende2 php','autor'=>'pepe','editorial'=>'santillana','año'=>2012,'en_prestamo'=>False));
	 $prestados=0;
	foreach($biblioteca as $libros =>$detalles){	
		//echo $libros. " <br/>";
		$prestados+=$detalles['en_prestamo'];
			foreach($detalles as $clave => $valor){
			echo $clave.":".$valor." <br/>"; 		
			
			}		
	}
	echo 'libros prestados'.$prestados;
	
	//
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	include './footer.php';
	
	
	?>