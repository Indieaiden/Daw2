<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Mensajes</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php
			if (!empty($_GET['nombre']) && !empty($_GET['contrasena'])){
			
				if(strlen($_GET['nombre']) >= 5){
					if($_GET['contrasena'] == strrev($_GET['nombre'])){
						?>
						<form action="descripcion.php" method="post">
							<label for="id_tema">Tema : </label>
							<input type="text" name="tema" id="id_tema"/><br/>
							<label  for="id_comentario">Comentario </label>
							<textarea name="comentario" rows="6" cols="50">Introduce texto</textarea>
							
							<input type="submit" value="Detalles"/>
							<br/>
							<input type="reset" value="Nueva opinion"/>
							<a href="formulario.php">Terminar</a>
						</form>
							
							<!-- <a href="mensajes.php">Nueva opinion</a>-->
						<?php
						
					}else{
						echo "Formato de la contrasena no admitido";
					}
					
				}else{
					echo "El nombre tiene que ser 5 o más caracteres";
				}
			}else{
				echo "Los campos son obligatorios ";
			}
		?>
		
	</body>
</html>