<?php
include_once 'header.php';
include 'clases.php';
session_start();
function jugar(){
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
		<input type="submit" value="Saca Carta" name="cartas">
	</form>
	<?php
}

if(isset($_SESSION["login"])&& isset($_SESSION["tipo"])){
	if(!isset($_SESSION["baraja"])){
		$baraja= new Baraja();
		$baraja->barajar();
		$_SESSION["baraja"]=$baraja;
	}else{
		$baraja=($_SESSION["baraja"]);
	}
	if(isset($_GET["cartas"])){
		/*SI LA BARAJA ESTA VACIA, YA HA ACABADO EL JUEGO,
		VEMOS GANADOR*/
		if(empty($baraja->mazo)){
			$puntos_usuario=$_SESSION["puntos_usu"];
			$puntos_equipo=$_SESSION["puntos_equi"];
			
			echo $_SESSION["login"]." ".$puntos_usuario." puntos<br>";
			echo "Equipo".$puntos_equipo." puntos<br>";
			if($puntos_usuario > $puntos_equipo){
				echo "Gana ".$_SESSION["login"]."<br>";
			}elseif($puntos_usuario < $puntos_equipo){
				echo "Gana Equipo<br>";
			}else{
				echo "Empate<br>";
			}
			
			unset($_SESSION["baraja"]);
			unset($_SESSION["puntos_usu"]);
			unset($_SESSION["puntos_equi"]);
			
			echo "<a href='menu.php'><u>Click aquí para volver al menú</u></a>";
		}else{
		/*SI LA BARAJA NO ESTA VACIA*/
		
			/*SI NO EXISTEN LAS VARIABLES DE SESION PUNTOS_USU Y PUNTOS_EQUI
			(PORQUE AUN NO HA EMPEZADO EL JUEGO)*/
			if(!isset($_SESSION["puntos_usu"]) && !isset($_SESSION["puntos_equi"])){
				/*SE CREAN CON VALOR 0*/
				$_SESSION["puntos_usu"]=0;
				$_SESSION["puntos_equi"]=0;
			}
			
			/*LE DAMOS UNA CARTA A USUARIO Y UNA A EQUIPO*/
			$carta_usuario=$baraja->sacarCarta();
			$carta_equipo=$baraja->sacarCarta();
			
			/*GUARDAMOS LA PUNTUACION DE LA JUGADA DE CADA UNO*/
			$puntos_jugada_usu= $carta_usuario->puntos();
			$puntos_jugada_equi= $carta_equipo->puntos();
			
			
			/*MOSTRAMOS LA CARTA QUE HA SACADO CADA UNO*/
			echo "<br><br>";
			echo "Usuario ha sacado: ";$carta_usuario->imprime();
			echo "<br><br>";
			echo "Equipo ha sacado: ";$carta_equipo->imprime();
			echo "<br><br>";
			
			/*MOSTRAMOS QUIEN GANA LA JUGADA*/
			
			if($puntos_jugada_usu > $puntos_jugada_equi){
				echo "Jugada ganada por ".$_SESSION["login"]."<br><br>";
			}elseif($puntos_jugada_usu < $puntos_jugada_equi){
				echo "Jugada ganada por Equipo<br><br>";
			}else{
				echo "Empate en esta jugada<br><br>";
			}
			/*SUMAMOS A LOS PUNTOS TOTALES LOS PUNTOS DE LA JUGADA,
			PARA GUARDARLO EN SESION*/
			
			$_SESSION["puntos_usu"]+=$puntos_jugada_usu;
			$_SESSION["puntos_equi"]+=$puntos_jugada_equi;
			
			/*MOSTRAMOS CUANTOS PUNTOS LLEVA CADA UNO EN LA PARTIDA*/
			echo $_SESSION["login"]." lleva ".$_SESSION["puntos_usu"]." puntos";
			echo "Equipo lleva ".$_SESSION["puntos_equi"]." puntos";
			
			
			/*DESTRUIMOS LA SESION DE BARAJA ANTIGUA PARA GUARDAR 
			LA DE AHORA*/
			unset($_SESSION["baraja"]);
			
			/*VOLVEMOS A CREAR LAS VARIABLES DE SESION DE BARAJA,
			PUNTOS_USU Y PUNTOS_EQUI CON LOS VALORES ACTUALIZADOS*/
			$_SESSION["baraja"]=$baraja;
		}
	}
		echo jugar();
		
/*ELSE DE if(isset($_SESSION["login"])&& isset($_SESSION["tipo"])){*/
}else{
			echo "ERROR_NOREGISTRADO";
		}
?>