<?php
include_once"funciones.php";
session_start();
?>
<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Sesion contador</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
	<?php
	function filtrado($datos){
			$datos = trim($datos);//elimina espacios antes y después de los datos
			$datos = stripslashes($datos);//elimina Backslashes
			$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
			return $datos;
		}
	?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				Nombre: 
				<input type="text" name="login" value="red" size="20" required="required">
				<br><br>
				Contraseña: 
				<input type="password" name="contrasena" required="required">
				<br><br>
				<input type="submit" name="enviar" value="Enviar">
		</form>
		<?php
		if (isset($_POST['enviar'])){
			$login = filtrado($_REQUEST['login']);
			$contrasena = filtrado($_REQUEST['contrasena']);
			$validados = validaUser($login,$contrasena);
			if($validados == 0){
				$_SESSION["login"]=$login;
				$_SESSION["contrasena"]=$contrasena;
				header("location: menu.php");
			}else{
				if($validados == -1){
					echo'Usuario no registrado';
				}
				if($validados == -2){
					echo'Password incorrecta';
				}
				if($validados == -3){
					echo'fecha de validex expirada';
				}
			}
		}
			
			// $nombre = filtrado($_REQUEST['nombre']);
			// print ($nombre);
			// print ("<br>");
			// if(isset($nombre)){
				// echo 'nombre de usuario correcto'; 
				// print ("<br>");
				// $pwd = filtrado($_REQUEST['pwd']);
			// }
			// if(isset($pwd)){
				// echo 'Contraseña correcta'; 
			// }
			// print ("<br>");
			// if($nombre!=$pwd){
				// $_SESSION['usuario']=$nombre;
				// header("location: Usuario_registrado.php");
			// }else{
				// echo'no se ha mandado el formulario por que el nombre de usuario y la contraseña son iguales';
				// header("location: entrada1.php");
			// }	
		?>
	</body>
</html>