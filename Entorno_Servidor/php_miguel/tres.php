<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Prueba De Formularios </Title>
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
		if (!isset($_POST['enviar'])){
		?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			a <input type="text" name="cadcar" value="vnssbakjbaksv" size="20">
			<br><br>
			b <input type="radio" name="genero" value="M" checked="checked">Mujer
			<input type="radio" name="genero" value="H" >hombre
			<br><br>
			c <input type="checkbox" name="aditivos[]" value="dinero" checked="checked">Dinero
			<input type="checkbox" name="aditivos[]" value="comida">Comida
			<input type="checkbox" name="aditivos[]" value="tiempo">Tiempo
			<br><br>
			d <input type="hidden" name="username" value="usuario">
			<br><br>
			e <input type="password" name="clave">
			<br><br>
			f <select name ="color">
				<option value="rojo" selected>Rojo</option>
				<option value="verde">Verde</option>
				<option value="azul">Azul</option>
			</select>
			<br><br>
			g <select multiple size="3" name="idiomas[]">
				<option value="ingles" selected>inglés</option>
				<option value="frances">Francés</option>
				<option value="aleman">Alemán</option>
				<option value="japones">Japonés</option>
			</select>
			<br><br>
			h <textarea cols="50" rows="4" name="comentario">
			No me he leido este libro pero...
			</textarea>
			<br><br>
			<input type="submit" name="enviar" value="Procesar">
		</form>
		<?php
		}
		else{
		/*
		cambiar nombre a uno
		hacer un dos que sea el que tiene las movidas de php
		hacer una tercera con todo junto
		*/
		$cadena = filtrado($_REQUEST['cadcar']);
		print ($cadena);
		print ("<br>");
		$sexo = $_REQUEST['genero'];
		print ($sexo);
		print ("<br>");
		$aditivos = $_REQUEST['aditivos'];
		foreach($aditivos as $aditivo)
			print ("$aditivo <br>");
		/*
		$actualizar = $_REQUEST['actualizar'];
		if($actualizar)
			print("Han sido actualizados los datos");
		print ("<br>");
		*/
		$username =$_REQUEST['username'];
		print ($username);
		print ("<br>");
		$clave = filtrado($_REQUEST['clave']);
		print ($clave);
		print ("<br>");
		/*
		$enviar = $_REQUEST['enviar'];
		if ($enviar)
			print("el boton de enviar ha sido pulsado");
		print ("<br>");
		*/
		$color = $_REQUEST['color'];
		print ($color);
		print ("<br>");
		$idiomas = $_REQUEST['idiomas'];
		foreach($idiomas as $idioma)
			print ("$idioma<br>");
		print ("<br>");
		$comentario = filtrado($_REQUEST['comentario']);
		print ($comentario);
		print ("<br>");
		}
		?>
	</body>
</html>
