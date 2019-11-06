<?php
	include '../tema2/header.php';
	function formu(&$nombre,&$apellidos,&$email){
	echo "<style>
			input:invald{
				border: 1px solid red;
			}
		</style>";	

?>
	<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="id_nombre">Nombre: </label>
		<input type="text" name="nombre"value="<?php $nombre?>"id="id_nombre" required /><br><br>
		<label for="id_apellidos">Apellidos: </label>
		<input type="text" name="apellidos" value="<?php echo $apellidos;?>" id="id_apellidos"/><br><br>
		<label for="id_email">Email: </label>
		<input type="text" name="email"  value="<?php echo $email;?>" id="id_email"/><br><br>
		<label for="id_pass">Contraseña: </label>
		<input type="password" name="pass"  id="id_pass"/><br><br>
		Sexo:<br>
		<label for="id_hombre">Hombre</label>
		<input type="radio" name="sexo" id="id_hombre" value="hombre"/>
		<label for="id_hombre">Mujer</label>
		<input type="radio" name="sexo" id="id_mujer" value="mujer"/><br><br>
		Restaurantes:<br>
		<label for="id_pizzeria">Pizzer&iacute;a</label>
		<input type="checkbox" name="restaurantes[]" id="id_pizzeria" value="pizzeria"/><br>
		<label for="id_chino">Chino</label>
		<input type="checkbox" name="restaurantes[]" id="id_chino" value="chino" checked="checked"/><br>
		<label for="id_pizzeria">Sushi</label>
		<input type="checkbox" name="restaurantes[]" id="id_sushi" value="sushi" disabled="disabled" /><br><br>
		M&uacute;sica:<br>
		<select name="musica[]" multiple="multiple">
			<option value="rap" selected="selected" >Rap</option>
			<option value="metal">Metal</option>
			<option value="trap">Trap</option>
			<option value="clasica" >Cl&aacute;sica</option>
		</select>
		<input type="submit" value="Enviar" name="enviar"/>

		</form>

<?php		

				echo "h";		
				
	}			
if (isset($_POST["enviar"])&& isset($_POST["nombre"])&& isset($_POST["apellidos"])&& isset($_POST["email"])&& isset($_POST["pass"])){
	
	if(empty($_POST["nombre"]) || empty( $_POST["apellidos"] ) || empty( $_POST["email"] ) || empty($_POST["pass"])|| empty($_POST["sexo"])|| empty($_POST["restaurantes"]) || empty($_POST["musica"])){	
		echo "¡Oh!, parece que no has introducido todos los datos.<u><a href='formu_registro3.0.php'>Click aquí para volver al formulario.</a></u>";
	}else{
			$nombre= $_POST["nombre"];
			$apellidos= $_POST["apellidos"];
			$pass= $_POST["pass"];
			$email=$_POST["email"];
			$sexo= $_POST["sexo"];
			$restaurantes= implode(", ",$_POST["restaurantes"]);
			$musica=implode(", ",$_POST["musica"]);
		
			if(strlen($nombre)>=5){
			
				echo "Nombre: ".$nombre."<br>";
				echo "Apellidos: ".$apellidos."<br>";
				echo "Contraseña: ".$pass."<br>";
				echo "Sexo: ".$sexo."<br>";
				echo "Restaurantes: ".$restaurantes."<br>";
				echo "Musica: ".$musica."<br>";
				
			}else{
				 echo formu($nombre,$apellidos,$email); 
				
				 echo "j";
				
					if(strlen($nombre)<=5){
						echo "l";
						echo "Nombre: ".$nombre."<br>";
						echo "Apellidos: ".$apellidos."<br>";
						echo "Contraseña: ".$pass."<br>";
						echo "Sexo: ".$sexo."<br>";
						echo "Restaurantes: ".$restaurantes."<br>";
						echo "Musica: ".$musica."<br>";
					}
			}
		}
}else{
?>		
		<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
		<label for="id_chino">Chino</label>
		<input type="checkbox" name="restaurantes[]" id="id_chino" value="chino" checked="checked"/><br>
		<label for="id_pizzeria">Sushi</label>
		<input type="checkbox" name="restaurantes[]" id="id_sushi" value="sushi" disabled="disabled" /><br><br>
		M&uacute;sica:<br>
		<select name="musica[]" multiple="multiple">
			<option value="rap" selected="selected" >Rap</option>
			<option value="metal">Metal</option>
			<option value="trap">Trap</option>
			<option value="clasica" >Cl&aacute;sica</option>
		</select>
		<input type="submit" value="Enviar" name="enviar"/>

		</form>
<?php		
	}

include '../tema2/footer.php';

?>