<!DOCTYPE html>
	<head>
		<Title> Hello World </Title>
	</head>
	<body>
	<form class="borde" action="<?php echo htmlspecialchars("PruebaFichero_dos.php")?>"
	method="POST" enctype="multipart/form-data">
	
		<div>
		<label for="fichero"> Fichero a subir </label>
		<input type="file" id="fichero" name="fichero">
		</div>
		
		
		<div>
		<input type="submit" name="aceptar" value="Aceptar">
		</div>

		<?php
		?>
	</body>
</html>