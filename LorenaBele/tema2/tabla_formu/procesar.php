<?php
function validar( $numero1,$numero2){
	$patron="/^[0-9]/";
	if(preg_match($patron,$numero1)&&preg_match($patron,$numero2)){
		return true;
	}else{
		return false;
	}
}
include './header.php';
if(empty($_POST["numero1"])||empty( $_POST["numero2"] )){
 
	echo "error algun campo vacio ";
	echo "<a href='formulario.php'>corrige el error</a>";
	
}else{
	$numero1=$_POST["numero1"];
	$numero2=$_POST["numero2"];
	if(!validar($numero1,$numero2)){
		echo "los valores introducidos no son numericos<br/>";
		echo "<a href='formulario.php'>corrige el error</a>";
	}else{

		if($numero1<$numero2){
			$intercambio=$numero1;
			$numero1=$numero2;
			$numero2=$intercambio;
		}
		echo "<table>";
		echo "<br/>";
		echo "<caption>Tabla de multiplicar</caption>";
		//se crea la cabecera dandole un valor de x a 10
		for($i=0;$i<=10;++$i){
			if ($i==0){	
			echo '<th class = "f" id ="d4"> x</th>';
			}else{	
			echo'<th class = "f">'.$i.'</th>';	
			}
		}	
		// se crea un bucle para las columnas y las celdas
		for($o=$numero2;$o<=$numero1;++$o){
			echo"<tr>";	
			//valor de 1 al 10
			echo '<td class = "f">'.$o.'</td>';	
			//rellena el contenido de la tabla multiplicando posicion $j*$o
			for($j=1;$j<=10;++$j){
			//si la suma de las posiciones es par pinta de un color enconreto	
			if(($o+$j) %2==0){
			echo'<td class ="f2">'.$j*$o.'</td>';	
				}else{
					echo'<td class ="f1">'.$j*$o.'</td>';	
				}
			}
			echo "</tr>";
		}
	
		echo '</table>';
		echo "<p><a href='formulario.php'>vuelve al formulario</a></p>";
	}
}
include './footer.php';
?>