<?php

if(isset($_COOKIE["nombre1"])){
			echo "bienvenido usuario ".$_COOKIE["nombre1"]."<br>";
}else{
	echo "acceso denegado<br/>";
	echo " contraseña no valida.<u><a href='formucoockie.php'>Click aquí para volver al formulario.</a></u><br/>";
}
if(isset($_POST["Atras"])){
	$nombre1 = "nombre1";
	$valor=$nombre;
	$f_expiracion=time()-60;		
	setcookie($nombre1,$valor,$f_expiracion);
	header ('Location:formucoockie.php');
}else{
	
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<input type="submit" value="Atras" name="Atras"/>
</form>