<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Página</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		
		<?php
			$a = "texto";
			
			echo "\$a=\"Texto\" ; <br>";
			echo '$a="Texto"; <br>';
			
			$vector = array("Ana","Carmen","Laura");
			echo "$vector[0] $vector[1] $vector[2] <br>";
			
			$vector2 =[1,2,3,4];
			echo $vector2[0]. " ".$vector2[1]. " ". $vector2[2]." ".$vector2[3];
			
			$arrayindex = ["1","2","3","4"];
			$arrayaso = ['es'=> "España",'fr' =>"Francia",'al'=>"Alemania"];
			
			foreach($arrayindex as $indexado){
				echo "<br>";
				echo $indexado;
				
			}
			echo "<br>";
			foreach($arrayaso as $asociativo=>$valor){
				
				echo "Pais[$asociativo] = $valor <br>";
				
			}
		?>
	</body>
</html>