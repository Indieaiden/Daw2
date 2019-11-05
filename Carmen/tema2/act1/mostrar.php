<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Tabla</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		<link type ="text/css" rel="stylesheet" href="ejercicio5.css"/>
		
	</head>
	<body>
	<?php
		if (isset($_POST['desde']) && isset($_POST['hasta'])){
			
			if($_POST['desde'] < $_POST['hasta']){
				
			
	?>
		<h1> Tabla de multiplicar </h1>
		<table>
			<tbody>
				<tr>
					<th>X</th>
					<?php	
						for($c = 1;$c <= 10; $c++){
							echo "<th>";
								echo $c;
							echo "</th>";
						}			
					?>
				</tr>
				<?php
					$resul = 0;	
					$suma = 0;
					for($numero = $_POST['desde'];$numero <= $_POST['hasta']; $numero++){
						echo "<tr>";
								echo "<td class=\"color\">";
									echo "$numero";
								echo "</td>";
						for($i=1 ;$i<=10;$i++){
							$resul = $numero*$i;
							$suma = $numero + $i;
							if($suma%2 !== 0){
								echo "<td class=\"impar\">";
									echo "$resul";
								echo "</td>";
							}else{
								echo "<td class=\"par\">";
									echo "$resul";
								echo "</td>";
							}
							
							
						}
						echo "</tr>";
					}
				?>
			</tbody>
		</table>	
		<?php
			}else{
				echo "El segundo valor tiene que ser más grande que el primero";
				echo "<form action=\"formulario.php\" method=\"post\">	";
					echo "<input type=\"submit\" value=\"Volver\"/>";
				echo "</form>";
			}
		}else{
		
			echo "Tienes que enviar los valores";
		}
		?>
	</body>
</html>