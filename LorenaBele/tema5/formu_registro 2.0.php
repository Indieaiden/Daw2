<?php
include 'header.php';

if (isset($_POST["enviar"])){
	
	if(empty($_POST["nombre"]) || empty( $_POST["apellidos"] ) || empty( $_POST["email"] ) || empty($_POST["pass"])|| empty($_POST["sexo"])|| empty($_POST["restaurantes"]) || empty($_POST["musica"])){	
	echo "¡Oh!, parece que no has introducido todos los datos.<u><a href='formu_registro.php'>Click aquí para volver al formulario.</a></u>";
	}else{
		$nombre= $_POST["nombre"];
		$apellidos= $_POST["apellidos"];
		$pass= $_POST["pass"];
		$sexo= $_POST["sexo"];
		$restaurantes= implode(", ",$_POST["restaurantes"]);
		$musica=implode(", ",$_POST["musica"]);

		echo "Nombre: ".$nombre."<br>";
		echo "Apellidos: ".$apellidos."<br>";
		echo "Contraseña: ".$pass."<br>";
		echo "Sexo: ".$sexo."<br>";
		echo "Restaurantes: ".$restaurantes."<br>";
		echo "Musica: ".$musica."<br>";
	}
		}else{
		?>
		<form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<label for="id_nombre">Nombre: </label>
		<input type="text" name="nombre" id="id_nombre"/><br><br>
		<label for="id_apellidos">Apellidos: </label>
		<input type="text" name="apellidos" id="id_apellidos"/><br><br>
		<label for="id_email">Email: </label>
		<input type="text" name="email" id="id_email"/><br><br>
		<label for="id_pass">Contraseña: </label>
		<input type="password" name="pass" id="id_pass"/><br><br>
		Sexo:<br>
		<label for="id_hombre">Hombre</label>
		<input type="radio" name="sexo" id="id_hombre" value="hombre"/>
		<label for="id_hombre">Mujer</label>
		<input type="radio" name="sexo" id="id_mujer" value="mujer"/><br><br>
		Restaurantes:<br>
		<label for="id_pizzeria">Pizzer&iacute;a</label>
		<input type="checkbox" name="restaurantes[]" id="id_pizzeria" value="pizzeria"/><br>
		<label for="id_mexicano">Mexicamo</label>
		<input type="checkbox" name="restaurantes[]" id="id_mexicano" value="mexicano" checked="checked"/><br>
		<label for="id_gallego">Gallego</label>
		<input type="checkbox" name="restaurantes[]" id="id_gallego" value="gallego" disabled="disabled" /><br><br>
		M&uacute;sica:<br>
		<select name="musica[]" multiple="multiple">
			<option value="rap" selected="selected" >Rock</option>
			<option value="metal">Flamenco</option>
			<option value="trap">Pop</option>
			<option value="clasica" >Cl&aacute;sica</option>
		</select>
		<input type="submit" value="Enviar" name="enviar"/>

		</form>
		<?php
	}

include 'footer.php';
?>
