<?php
include_once"Clases.php";
session_start();
// http://localhost/php/TresEnR/Index.php
?>
<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title>Index</Title>
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
		function filtrado($datos){
		$datos = trim($datos);//elimina espacios antes y después de los datos
		$datos = stripslashes($datos);//elimina Backslashes
		$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
		return $datos;
		}
		
 if(!isset($_SESSION["mostrar"])){
	$_SESSION["mostrar"] = true;
 }
 if(isset($_POST['enviar'])){
	$_SESSION["mostrar"] = false;
	//si en algun momento quiero volver a mostrar el formulario poner mostrar a true
	$name1 = filtrado($_REQUEST['name1']);
	$name2 = filtrado($_REQUEST['name2']);
	$ficha = filtrado($_REQUEST['ficha']);
	$fichaM = './imagenes/circulo.png';
	$fichaR = './imagenes/cruz.png';

	if($ficha==='roja'){
		$ficha1= new Ficha('roja',"$fichaR");
		$ficha2= new Ficha('morada',"$fichaM");
		$jugador1= new Jugador($name1,$ficha1);
		$jugador2= new Jugador($name2,$ficha2);
	}elseif($ficha==='morada'){
		$ficha2= new Ficha('roja',"$fichaR");
		$ficha1= new Ficha('morada',"$fichaM");
		$jugador1= new Jugador($name1,$ficha1);
		$jugador2= new Jugador($name2,$ficha2);
	}
	
	$tablero= new Tablero($ficha1,$ficha2);
	$turno = $tablero->iniciar();
	$tablero->mostrar();
	if(!isset($_SESSION["ficha1"])){
		$_SESSION["ficha1"]= $ficha1;
	}
	if(!isset($_SESSION["ficha2"])){
		$_SESSION["ficha2"]= $ficha2;
	}
	if(!isset($_SESSION["jugador1"])){
		$_SESSION["jugador1"]= $jugador1;
	}
	if(!isset($_SESSION["jugador2"])){
		$_SESSION["jugador2"]= $jugador2;
	}
	if(!isset($_SESSION["tablero"])){
		$_SESSION["tablero"]= $tablero;
	}
	// if(!isset($resultado)){
		// $resultado==false;
	// }
	
 }
	if(isset($_GET['col'])){
		$fichaEnJuego = $_SESSION["tablero"]->getFicha();
		$ruta = $fichaEnJuego->getImagen();
		$fila = $_GET['row'];
		$columna = $_GET['col'];
		$_SESSION["tablero"]->ponerFicha($fila,$columna,$ruta);
		$_SESSION["tablero"]->mostrar();
		$resultado = $_SESSION["tablero"]->Verificar($columna,$fila);
		
		if($resultado==TRUE){
			$turno=$_SESSION["tablero"]->getTurno();
			if($turno == 0){
				$_SESSION["jugador1"]->sumaPuntos(20);
				echo"Ha ganado el jugador1 ";
				echo"20 Puntos para Gryffindor";
			}else{
				$_SESSION["jugador2"]->sumaPuntos(20);
				echo"Ha ganado el jugador2 ";	
				echo"20 Puntos para slytherin";
			}
			
			
		}
	}
	
 if ($_SESSION["mostrar"] == true){
 ?> 
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		Nombre del jugador 1
		<input type="text" name="name1" size="8" required="required">
		<br><br>
		Nombre del jugador 2
		<input type="text" name="name2" size="8" required="required">
		<br><br>
		Elige la ficha que quieras jugador 1
		<br>
		roja
		<input type="radio" name="ficha" value="roja">
		<br>
		morada
		<input type="radio" name="ficha" value="morada">
		<br><br>
		<input type="submit" name="enviar" value="enviar">
		<br><br>
	</form>
<?php 
}
?>
	</body>
</html>		