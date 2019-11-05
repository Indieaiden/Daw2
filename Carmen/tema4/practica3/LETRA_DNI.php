<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Numero DNI</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php
			$numerito = $_POST['numero'];
			//la funcion ctype_digit comprueba si sin todo numeros en la cadena de texto, devuelve true si son todos numeros
			if(ctype_digit($numerito)){
				// la funcion strlen cuenta la cantidad de dígitos  que tiene una cadena
				if(strlen($numerito) == 8 ){
					function letra(){
						$arraLetras = array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
						global $numerito;
						$posiLetras = (int)$numerito%23;
						
						echo "$numerito $arraLetras[$posiLetras]";
				
					}
					letra();
				}else{
					echo "La longitud tiene que ser 8";
					echo "<form action=\"SABER_NIF.html\" method=\"post\">	";
						echo "<input type=\"submit\" value=\"Volver\"/>";
					echo "</form>";
				}
		
			}else{
				echo "Tienes que meter solo numeros";
				echo "<form action=\"SABER_NIF.html\" method=\"post\">	";
					echo "<input type=\"submit\" value=\"Volver\"/>";
				echo "</form>";
			}
			
			
	
		?>
	</body>
</html>