<?php
include_once"clases.php";
session_start();
?>
<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title>Juego</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
		<style type="text/css">
		table, th, td {
			border: 1px solid black;
			width: 600px;
			height: 200px;
		}
		img{
			width: 200px;
			height: 200px;
		}
		</style>	
	</head>
	<body>
		<?php
		if(isset($_POST['enviar'])&&$_REQUEST['si']==0){
			if(isset($_SESSION["login"])){
				$mazo=array();
				$cartasUser=array();
				$cartasPC=array();
				for($i=0;$i<4;$i++){
					for($j=0;$j<7;$j++){
						if($i=0){	
							$mazo[]=new Carta($j,'oros');
						}
						if($i=1){	
							$mazo[]=new Carta($j,'copas');
						}
						if($i=2){	
							$mazo[]=new Carta($j,'espadas');
						}
						if($i=3){	
							$mazo[]=new Carta($j,'bastos');
						}	
					}
				}
					for($a=10;$a<13;$a++){
						if($i=0){	
							$mazo[]=new Carta($a,'oros');
						}
						if($i=1){	
							$mazo[]=new Carta($a,'copas');
						}
						if($i=2){	
							$mazo[]=new Carta($a,'espadas');
						}
						if($i=3){	
							$mazo[]=new Carta($a,'bastos');
						}	
					}
				if(!isset($_SESSION["$mazo"])){
					$_SESSION["$mazo"]=$mazo;
				}
				if(!isset($_SESSION["$cartasUser"])){
					$_SESSION["$cartasUser"]=$cartasUser;
				}
				if(!isset($_SESSION["$cartasPC"])){
					$_SESSION["$cartasPC"]=$cartasPC;
				}
				if(!isset($_SESSION["$puntosUser"])){
					$_SESSION["$puntosUser"];
				}
				if(!isset($_SESSION["$puntosIA"])){
					$_SESSION["$puntosIA"];
				}
			}else{
				echo'Lo sentimos pero el usuario no es valido';
			}
		}
	?> 
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			¿Quiere carta?
			<br>
			Si
			<input type="radio" name="si" value="0">
			<br>
			No
			<input type="radio" name="si" value="1">
			<br><br>
			<input type="submit" name="enviar" value="enviar">
			<br><br>
		</form>
