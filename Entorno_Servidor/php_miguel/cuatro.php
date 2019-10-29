<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Prueba De Formularios </Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
		$err = false;
		$name = $pwd = $edad = "";
		$errName = $errPwd =$errEdad = "";
		function filtrado($datos){
			$datos = trim($datos);//elimina espacios antes y después de los datos
			$datos = stripslashes($datos);//elimina Backslashes
			$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
			return $datos;
		}
		if (!isset($_POST['enviar'])){
		?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		Nombre
		<input type="text" name="name" value="JJParker" size="20">
			<br><br>
		Contraseña
		<input type="password" name="pwd">
			<br><br>
		Edad
		<input type="text" name="edad" value="30" size="20">
			<br><br>
		<input type="submit" name="enviar" value="Ejecutar">
		</form>
		<?php
		}
		else{
			
			$name = filtrado($_REQUEST['name']);
			print ($name);
			print ("<br>");
			$pwd = filtrado($_REQUEST['pwd']);
			print ($pwd);
			print ("<br>");
			$edad = $_REQUEST['edad'];
			print ($edad);
			print ("<br>");
		/*
		vamos a hacer un formulario con solo tres campos
		en el que vamos a aplicar el control de errores
		creamos lo primero una variable de control
		$err = false
		luego 3 variables para los campos
		$nombre = $pwd = $edad ="";
		y otras 3 variables para los errores de las anteriores
		$errNombre =$errPwd = $errEdad="";
		Comprobamos si se ha enviado el formulario lo primero,
		 Para comprobar si los datos han sido recibidos correctamente podemos hacer:
			if (!isset($_POST['edad])){
				$err = true;
				$errEdad = "La edad es requerida";
			}
			o por ejemplo			
			if (!is_number($_POST['edad])){
				$err = true;
				$errEdad = "Tiene que ser un numero";
			}
			lo cual habira que ir cuniendo con elseifs para comprobar todos los errores
			comprobar si el is_number funciona o si se escribe así
			$_POST es un array
			if empty es para comprobar una cadena vacia
		*/
		}
		?>
	</body>
</html>