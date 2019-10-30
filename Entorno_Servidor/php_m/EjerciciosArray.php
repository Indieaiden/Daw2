<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Ejercicio Arrays </Title>
		
	</head>
	<body>
		<?php
		
			$definida = defined('MONEDA');
			echo 'La constante esta definida? ',
			var_dump ($definida);
			define ("MONEDA","EURO");
			echo MONEDA;
			var_dump (MONEDA);
			echo "<br>";
			echo "<br>";
			
			$libro1 = array("titulo" => "x", "autor" => "x", "editorial" => "x","año" => 1, "En_Prestamo" => true);
			$libro2 = array("titulo" => "y", "autor" => "y", "editorial" => "y","año" => 2, "En_Prestamo" => false);
			$libro3 = array("titulo" => "z", "autor" => "z", "editorial" => "z","año" => 3, "En_Prestamo" => false);
			$libro4 = array("titulo" => "a", "autor" => "a", "editorial" => "a","año" => 4, "En_Prestamo" => false);
			$libro5 = array("titulo" => "b", "autor" => "b", "editorial" => "b","año" => 5, "En_Prestamo" => false);
			$biblioteca = array(
			$libro1,
			$libro2,
			$libro3,
			$libro4,
			$libro5
			);
			$contador = 0;
			for ($i=0; $i<count($biblioteca); ++$i){
				if ($biblioteca[$i]["En_Prestamo"]){
					$contador +=1;
				}
			}
			echo "$contador";
			echo "<br>";
			echo "<br>";

			echo"<table>";
			foreach(get_defined_constants() as $clave => $valor) {
				
					echo"<tr>", 
							"<td>", 
							"$clave => $valor",
							"</td>",
						"</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>