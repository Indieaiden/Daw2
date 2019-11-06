<?php
//Actividad 1: Mostrar la tabla de multiplicar de los 10 primeros numeros en el formato de la figura
 include 'header.php';
 
//crea la tabla
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
	for($o=1;$o<=10;++$o){
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
include 'footer.php';
	
?> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 include 'footer.php';
 ?>