<?php
session_start();
function registro($nombre,$opcion){
	$file="registro.log";
	$fp =fopen ($file,"a+");
	$tiempo= date("h:i:s",time());
		
	$texto="Usuario : ". $nombre. " ".
	"Tiempo : " .$tiempo." ".
	"Opcion elegida: ".$opcion;
		
	fwrite($fp,$texto);
	fwrite($fp,PHP_EOL);
	fclose($fp);
}

if(isset($_SESSION['login'])&&isset($_SESSION['tipo'])){
		$tipo=$_SESSION['tipo'];
		$nombre=$_SESSION['login'];
		echo "bienvenido usuario ".$nombre." T ".$tipo."<br/>";
		echo "MENU<br/>";

}

if(isset($_POST["Salir"])){
	$opcion="Salir";
	registro($nombre,$opcion);
	unset($_SESSION['login']);
	unset($_SESSION['tipo']);
	session_destroy();
	header ('Location:index.php');
}
if(isset($_POST["Cartas"])){
	$opcion="Cartas";
	registro($nombre,$opcion);
	header ('Location:juego.php');
}
if(isset($_POST["Chat"])){
	$opcion="Chat";
	registro($nombre,$opcion);
	header ('Location:../cookie/chat.php');
}
		

function menu($tipo){


?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<?php 	if($tipo=="ADMINISTRADOR"){ ?>
	<input type="submit" value="Chat" name="Chat"/>
	<?php }?>
	<input type="submit" value="Juego de cartas" name="Cartas"/>
	<input type="submit" value="Salir" name="Salir"/>
</form>
<?php
	
}
echo menu($tipo);
?>