<?php
session_start();
include 'header.php';
include 'funciones.php';
function form(){
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><h1>Identificaci&oacute;n de usuario</h1><br>
<label for="id_nombre"><h2>Nombre:</label>
<input type="text" name="login" id="id_login"/></h2><br>
<label for="id_pass"><h2>Password: </label>
<input type="password" name="contrasena" id="id_contrasena"/></h2><br>
<input type="submit" value="Enviar" name='Enviar'/>
</form>

<?php
}
if(isset($_POST["Enviar"])){
	if(!empty($_POST["login"])){
	  $login=$_POST["login"];	
		}else{
			echo "Nombre no introducido<u><a href='index.php'>Click aquí para volver al formulario.</a></u>";
		}
	if(!empty($_POST["contrasena"])){
	$contrasena=$_POST["contrasena"];
	}else{
		echo "Contraseña no introducido<u><a href='index.php'>Click aquí para volver al formulario.</a></u>";
	}
	if(isset($login) && isset($contrasena)){
		$validar=validarUser($login,$contrasena);
		if($validar==ERROR_NOREGISTRADO){
			echo 'ERROR_NOREGISTRADO';
		}
		if($validar==ERROR_PASSWORD){
			echo 'ERROR_PASSWORD';
		}
		if($validar==ERROR_EXPIRADO){
			echo 'ERROR_EXPIRADO';
		}
		if($validar==ADMINISTRADOR||$validar==REGISTRADO){
			$_SESSION['login']=$login;
			if($validar==ADMINISTRADOR){
				$_SESSION['tipo']="ADMINISTRADOR";
			}elseif($validar==REGISTRADO){
				$_SESSION['tipo']="REGISTRADO";
			}
				header("Location:menu.php");
		}
	}
}else{
	form();
}
include 'footer.php';
?>