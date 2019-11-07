<?php
	include '../../tema2/header.php';


	if (isset($_POST["enviar"])){	
		if(empty($_POST["nombre"])|| empty($_POST["pass"])){	
			echo " no has introducido todos los datos.<u><a href='formucoockie.php'>Click aquí para volver al formulario.</a></u>";
			}else{
				$nombre= $_POST["nombre"];			
				$pass= $_POST["pass"];
				$nombre1 = "nombre1";
				$valor=$nombre;
				$f_expiracion=time()+60;

				if(strlen($pass)>=5){
			
					if(setcookie($nombre1,$valor,$f_expiracion)){
					header ('Location:bienvenido.php');
						}else{
							header ('Location:bienvenido.php');	
						}
				}else{
					echo " contraseña no valida.<u><a href='formucoockie.php'>Click aquí para volver al formulario.</a></u>";
				}
			}	
	}else{
?>		
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label id="id_nombre">Nombre :</label>
		<input type="text" name="nombre" value ="nombre"/><br/>
		<label for="id_pass">Contraseña: </label>
		<input type="password" name="pass"  id="id_pass"/><br>
		<input type="submit" value="Enviar" name="enviar"/>
		
		</form>
<?php
	}
	
include '../../tema2/footer.php';
?>
	