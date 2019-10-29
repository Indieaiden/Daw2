<!DOCTYPE html>
	<head>
		<Title> Ejercicio Variables </Title>
	</head>
	<body>
		<?php
			$A = 6;
			$B = 7;
			$C = $A;
			$A = $B;
			$B = $C;
			echo "$A";
			echo "<br>";
			echo "$B";
			echo "<br>";
			echo "<br>";
			
			$A = 12;
			$B = 4;
			$Sum = $A + $B;
			$Rest = $A - $B;
			$Mult = $A * $B;
			$Div = $A/$B;
			echo "$Sum";
			echo "<br>";
			echo "Suma : = ".($A+$B);
			echo "<br>";
			echo "$Rest";
			echo "<br>";
			echo "$Mult";
			echo "<br>";
			echo "$Div";
			echo "<br>";
			echo "<br>";
			
			$Ninos = 23;
			$Ninas = 42;
			$PorTotal = $Ninas + $Ninos;
			$Porninos = $Ninos * 100 / $PorTotal; 
			$Porninos = round($Porninos);
			echo "$Porninos %";
			echo "<br>";
			$Porninas = $Ninas * 100 / $PorTotal; 
			$Porninas = round($Porninas);
			echo "$Porninas %";
			echo "<br>";
			echo "<br>";
			
			
			$Numero = 5;
			$Resultado = 0;
			echo"<table>";
			echo "<tr>";
			echo "<td> 1*$Numero </td>";
			echo "<td>", $Resultado = 1*$Numero ,"</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td> 2*$Numero </td>";
			echo "<td>", $Resultado = 2*$Numero,"</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td> 3*$Numero </td>";
			echo "<td>", $Resultado = 3*$Numero,"</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td> 4*$Numero </td>";
			echo "<td>", $Resultado = 4*$Numero,"</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td> 5*$Numero</td>";
			echo "<td>", $Resultado = 5*$Numero,"</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td> 6*$Numero</td>";
			echo "<td>", $Resultado = 6*$Numero,"</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td> 7*$Numero</td>";
			echo "<td>", $Resultado = 7*$Numero,"</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td> 8*$Numero</td>";
			echo "<td>", $Resultado = 8*$Numero,"</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td> 9*$Numero</td>";
			echo "<td>", $Resultado = 9*$Numero,"</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td> 10*$Numero</td>";
			echo "<td>", $Resultado = 10*$Numero,"</td>";
			echo "</tr>";
			echo "</table>";
			echo "<br>";
			echo "<br>";

			$Name = "Zelda";
			$Apell = "Minish";
			$Dir = "Cap";
			$telf = 7923;
				?>
				
			<table>
				<tr>
					<td>Nombre	</td>
					<td>Apellidos</td>
					<td>Direcion</td>
					<td>Telefono</td>
				</tr>
				<?php
				
			echo  "<tr>", 
					"<td>", $Name ,"</td>",
					"<td> $Apell </td>",
					"<td> $Dir </td>",
					"<td> $telf </td>",
				"</tr>",
			"</table>";
			echo "<br>";
			echo "<br>";
		?>
	</body>
</html>