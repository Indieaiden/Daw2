<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primera página"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php
			$errores ;
			if(isset($_POST['enviar'])){
				
				$longitudCon = strlen($_POST['contrasena']);
				if (isset($_POST['nombre']) && empty($_POST['nombre']) == false ){
					if(isset($_POST['contrasena']) && empty($_POST['contrasena']) == false){
						if($longitudCon > 8){
							$errores = false;
						
						}else{
							echo "la longitud de la contraseña tiene que ser mayor que 8";
							$errores = true;
						}					
					}else{
						echo "La contraseña es obligatoria";
						$errores = true;
					}									
				}else{
					echo "El nombre es obligatorio";
					$errores = true;
				}
				
			}
			if(isset($_POST['enviar']) && $errores == false){	
				echo $_POST['nombre'];
				echo "<br/>";
				echo $_POST['contrasena'];
				echo "<br/>";
							
				if (isset($_POST['animal']) ){
					$variable = $_POST['animal'];
					echo (implode(",",$variable));
					echo "<br/>";
				}		
				if (isset($_POST['idioma']) ){
									
					echo (implode(",",$_POST['idioma']));
					echo "<br/>";
				}
				if (isset($_POST['genero']) ){
								
					echo (implode($_POST['genero']));
				}
			}else{
		?>		
				<h1>Identificación de usuario.</h1>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				
					<label for="id_texto">Nombre : </label>
					<input type="text" name="nombre" id="id_texto" value="<?php 
					if(isset($_POST['nombre'])){ echo $_POST['nombre'];} ?>"/><br/>
					
					<label for="id_password">Password : </label>
					<input type="password" name="contrasena" id="id_password"/><br/>
					
					<p>Marca el/los animales que tienes: </p>
					<input type="checkbox" name="animal[]" value="perro" <?php 
						echo !empty($_POST['animal']) && in_array("perro",$_POST['animal'])? 
							'checked="checked"':"";?>/>Perro<br/>
					<input type="checkbox" name="animal[]" value="gato" <?php 
						echo !empty($_POST['animal']) && in_array("gato",$_POST['animal'])? 
							'checked="checked"':"";?>/>Gato<br/>
					<input type="checkbox" name="animal[]" value="conejo" <?php 
						echo !empty($_POST['animal']) && in_array("conejo",$_POST['animal'])? 
							'checked="checked"':"";?> />Conejo<br/>
					<input type="checkbox" name="animal[]" value="pajaro" <?php 
						echo !empty($_POST['animal']) && in_array("pajaro",$_POST['animal'])? 
							'checked="checked"':"";?>/>Pajaro<br/>
					<input type="checkbox" name="animal[]" value="otro" <?php 
						echo !empty($_POST['animal']) && in_array("otro",$_POST['animal'])? 
							'checked="checked"':"";?>/>Otro<br/>
					
					<p>Marca el/los idiomas que conoces: </p>
					
					<select name= "idioma[]" multiple="multiple">
						<option value="in" <?php 
						echo !empty($_POST['idioma']) && in_array("in",$_POST['idioma'])? 
							'selected="selected"':"";?>>Ingles</option>
						<option value="es" <?php 
						echo !empty($_POST['idioma']) && in_array("es",$_POST['idioma'])? 
							'selected="selected"':"";?>>Espaniol</option>
						<option value="fr" <?php 
						echo !empty($_POST['idioma']) && in_array("fr",$_POST['idioma'])? 
							'selected="selected"':"";?>>Frances</option>
						<option value="al" <?php 
						echo !empty($_POST['idioma']) && in_array("al",$_POST['idioma'])? 
							'selected="selected"':"";?>>Aleman</option>
						<option value="it" <?php 
						echo !empty($_POST['idioma']) && in_array("it",$_POST['idioma'])? 
							'selected="selected"':"";?>>Italiano</option>				
					</select>
					
					<br/>
					
					<p>Marca tu género: </p>
					<input type="radio" name="genero[]" value="mujer" <?php 
						echo !empty($_POST['genero']) && in_array("mujer",$_POST['genero'])? 
							'checked="checked"':"";?>/>Femenino<br/>
					<input type="radio" name="genero[]" value="hombre" <?php 
						echo !empty($_POST['genero']) && in_array("hombre",$_POST['genero'])? 
							'checked="checked"':"";?>/>Masculino<br/>
					<input type="radio" name="genero[]" value="otro" <?php 
						echo !empty($_POST['genero']) && in_array("otro",$_POST['genero'])? 
							'checked="checked"':"";?> />Otro<br/>
					<br/>
					<input name ="enviar" type="submit" value="Enviar"/>
					
				</form>
		<?php
		
			}
		?>
	</body>
</html>