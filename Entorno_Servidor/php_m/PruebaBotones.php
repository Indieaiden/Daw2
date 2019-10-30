<!DOCTYPE html>
	<head>
		<Title> Hello World </Title>
	</head>
	<body>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			//Procesar formulario
			$nombre = $_POST['nombre'];
			$tipo = $_POST['tipo'];
			echo "Buenos dias $nombre ha elegido la accion $tipo <br>";
		}else{
		?>
	
		<form class="borde" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<label for="nombre"> Nombre </label>
		<input type="text" id="nombre" name="nombre">
		
		<!-- INPUT TYPE BUTTON -->
		<button type="submit" name="tipo" value="acceder"> Acceder </button>
		<button type="submit" name="tipo" value="cambio"> Cambio de contrase&ntilde;a</button>
		<button type="submit" name="tipo" value="nuevo"> Registro de usuario</button>
		</form>
		<?php
		}
		?>
	</body>
</html>