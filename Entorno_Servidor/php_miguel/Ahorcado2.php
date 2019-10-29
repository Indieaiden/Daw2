<?php session_start(); ?>
<!DOCTYPE html>
	<head>
		<Title> Ahorcado </Title>
	</head>
	<body>
		<?php
		function filtrado($datos){
			$datos = trim($datos);//elimina espacios antes y después de los datos
			$datos = stripslashes($datos);//elimina Backslashes
			$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
			return $datos;
		}
		$palabras = array('alakazham','snorlax','mimiku','agumon','torchick');
		?>
		<h1>El ahorcado</h1>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		Introduce una letra
		<input type="text" name="letra" size="1" >
		<br><br>
		<div>Empiezas con 6 Vidas</div>
		<br><br>
		<input type="submit" name="enviar" value="Jugar">
		<input type="submit" name="salir" value="Dejar De Jugar">
		<br><br>
	</form>
		<?php
		if (isset($_POST['enviar'])){
			if(!isset($_SESSION['palabraAleatoria'])){
				$_SESSION['palabraAleatoria'] = rand(0,4);
			}
			if(!isset($_SESSION['vidas'])){
				$_SESSION['vidas']=6;
			}
			$letra = filtrado($_REQUEST['letra']);
			$cadena=$palabras[$_SESSION['palabraAleatoria']];
			if(!isset($_SESSION ['letrasPulsadas'])){
			 $_SESSION ['letrasPulsadas'] = $letra;
			}
			else{
				$pos=strpos($_SESSION ['letrasPulsadas'],$letra);
				if($pos === false){
					$_SESSION ['letrasPulsadas'] .= $letra;
					$muerte=strpos($cadena,$letra);
					if($muerte === false){
						if($_SESSION['vidas']===0){
							echo"Has perdido";
						}else{
							$_SESSION['vidas']--;
							//echo"Te quedan".$_SESSION['vidas']."vidas <br>";
							//echo "<img src="$arrayfotos['numfoto']">";
						}
					}
				}else{
					echo'la letra ya ha sido pulsada <br>';
				}
			}	
			$letrasPulsadas=$_SESSION ['letrasPulsadas'];
			$principal = array();
			for($i=0;$i<strlen($cadena);$i++){
				$principal[$i] = '_';
				for($j=0;$j<strlen($letrasPulsadas);$j++){
					if(substr($cadena,$i,1)===substr($letrasPulsadas,$j,1)){
						$principal[$i]=substr($cadena,$i,1);
					}
				}
			}
			for($i=0;$i<strlen($cadena);$i++){
				echo $principal[$i];
			}
		}
		if (isset($_POST['salir'])){
			session_destroy();
		}
		?>
	</body>
</html>