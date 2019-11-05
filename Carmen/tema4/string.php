<!DOCTYPE html>
<html lang="es">
	<head>
		<title>FUNCIONES DE STRING</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php
				/*		
			$a = 'dividir la cadena';
			$partes1 = explode(' ',$a);
			echo $partes1[0],$partes1[1],$partes1[2];
			
			echo "<br>";
			$partes2 = implode(' ', $partes1);
			echo $partes2;
			*/
			switch($_POST['menu']){
				case "1":
					echo strlen($_POST['cadena']);
					break;
				case "2":
					echo strtolower($_POST['cadena']);
					break;
				case "3":
					echo strtoupper($_POST['cadena']);
					break;
				case "4":
					echo ucwords($_POST['cadena']);
					break;
				case "5":
					echo ucfirst($_POST['cadena']);
					break;
				case "6":
					echo chr($_POST['cadena']);
					break;
				case "7":
					echo ord($_POST['cadena']);
					break;
				case "8":
					echo ltrim($_POST['cadena']);
					break;
				case "9":
					echo rtrim($_POST['cadena']);
					break;
				case "10":
					echo trim($_POST['cadena']);
					break;
				case "11":
					echo chop($_POST['cadena']);
					break;
				case "12":
					echo substr($_POST['cadena'],3);
					break;
				case "13":
					echo strrev($_POST['cadena']);
					break;
				case "14":
					$cadena = substr($_POST['cadena'],0,5);
					echo str_repeat($cadena,5);
					break;
				case "15":
					$cadena = substr($_POST['cadena'],0,5);
					echo str_pad($cadena,7,'-');
					break;
				case "16":
					echo str_replace('o','mo',$_POST['cadena']);
					break;
				case "17":
					print_r(explode(' ',$_POST['cadena'])); 
					break;
				case "18":
					$lista = explode(' ',$_POST['cadena']);
					echo implode('%',$lista);
					break;
				case "19":
					echo strpos($_POST['cadena'],'@');
					break;
				case "20":
					echo strstr($_POST['cadena'],'@');
					break;
				case "21":
					echo substr_count($_POST['cadena'],'a');
					break;
				case "22":
					$Frecuencia = count_chars($_POST['cadena'],0);
					echo "El caracter a aparece ".$Frecuencia[ord('a')]." veces en el texto ";
					break;	
			}
		?>
		<form action='formulario.php' method='post'>
		
			<input type="submit" value="Volver"/>
		</form>
	</body>
</html>