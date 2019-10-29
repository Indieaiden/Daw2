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
		//Me declaro un array con las palabras que pueden salir en el juego
		$palabras = array('alakazham','coma','ostas','yoestaybien','gracios');
		?>
		<h1>El ahorcado</h1>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		Escribe Un numero entre 0 y 4 para elegir la palabra
		<input type="text" name="posPalabra" size="1" >
		<br><br>
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
		//las variables creadas EN SESSION las utilizo para que no se me borren los datos cada vez que se ejecuta el codigo es decir a modo de base de datos
		//compruebo si el formulario se ha mandado
		if (isset($_POST['enviar'])){
			//Si la varaible vidas esta vacia la lleno ya que si simplemente la inicializase se volverai a crear de forma constante y no podria cambiarle el valor
			if(!isset($_SESSION['vidas'])){
				$_SESSION['vidas']=6;
			}
			//Guardo los datos recibidos por el formulario
			$letra = filtrado($_REQUEST['letra']);
			//me aseguro de que es un valor de tipo int el dato recibido
			$posPalabra = intval(filtrado($_REQUEST['posPalabra']));
			$cadena=$palabras[$posPalabra];
			//Inicializo y lleno letrasPulsadas para poder tener un registro de las letras que han sido pulsadas y a la vez compruebo si estan repetidas o no
			if(!isset($_SESSION ['letrasPulsadas'])){
			 $_SESSION ['letrasPulsadas'] = $letra;
			}
			else{
				//Utilizo strpos ya que si em encuantra algun numero significa que hay numero y así no tengo que hacer bucles adicionales
				$pos=strpos($_SESSION ['letrasPulsadas'],$letra);
				if($pos === false){
					$_SESSION ['letrasPulsadas'] .= $letra;
					$muerte=strpos($cadena,$letra);
					if($muerte === false){
						if($_SESSION['vidas']===0){
							echo"Has perdido";
						}else{
							$_SESSION['vidas']--;
							echo"Te quedan".$_SESSION['vidas']."vidas <br>";
						}
					}
				}else{
					echo'la letra ya ha sido pulsada <br>';
				}
			}	
			$letrasPulsadas=$_SESSION ['letrasPulsadas'];
			$principal = array();
			//me recorro la palabra como si fuera un array letra a letra comprobando si la letra que ha sido pulsada está en ella 
			//y voy escribiendo guiones o letras si alguna de las letras coincide tanto con la que se acaba de meter como con las que estaban ya puestas
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
		//Utilizo este boton para limpiar los datos que se me han guradado en las variables de session
		if (isset($_POST['salir'])){
			session_destroy();
		}
		?>
	</body>
</html>