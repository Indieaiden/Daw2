<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Sesion contador</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
	<?php
	session_start();
	function filtrado($datos){
			$datos = trim($datos);//elimina espacios antes y después de los datos
			$datos = stripslashes($datos);//elimina Backslashes
			$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
			return $datos;
		}
	
		//MOSTRAR
	?>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					Nombre: <input type="text" name="nombre" value="Juan" size="20" required="required">
					<br><br>
					Contraseña: 
					<input type="password" name="pwd" required="required">
					<br><br>
					<input type="submit" name="enviar" value="Enviar">
			</form>
		<?php
		if (isset($_POST['enviar'])){
			//PROCESAR
			
			$nombre = filtrado($_REQUEST['nombre']);
			print ($nombre);
			print ("<br>");
			if(isset($nombre)){
				echo 'nombre de usuario correcto'; 
				print ("<br>");
				$pwd = filtrado($_REQUEST['pwd']);
			}
			if(isset($pwd)){
				echo 'Contraseña correcta'; 
			}
			print ("<br>");
			if($nombre!=$pwd){
				$_SESSION['usuario']=$nombre;
				header("location: Usuario_registrado.php");
			}else{
				echo'no se ha mandado el formulario por que el nombre de usuario y la contraseña son iguales';
				header("location: entrada1.php");
			}	
		}
		?>
	</body>
</html>