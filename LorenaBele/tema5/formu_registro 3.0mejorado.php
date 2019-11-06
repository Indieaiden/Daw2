<?php		
		include 'header.php';
		function formu(&$con){
				if($con==1){
				echo "<style>
				input:invalid{
				border: 1px solid red;
				}
				</style>";
				}
				$aux="checkbox";
				if(isset($_POST["sexo"])){
						if($_POST["sexo"]== "hombre"){
						$cselct1="checked";
						$cselct2="";
						}elseif($_POST["sexo"] == "mujer"){
						$cselct1="";
						$cselct2="checked";
					}
				}
?>
	<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="id_nombre">Nombre: </label>
		<input type="text" name="nombre" <?php if ($con==1){}else{if(isset($_POST["nombre"])){ echo 'value="'.$_POST["nombre"].'"';}} ?>id="id_nombre" required /><br><br>
		<label for="id_apellidos">Apellidos: </label>
		<input type="text" name="apellidos" <?php if(isset($_POST["apellidos"])) echo 'value="'.$_POST["apellidos"].'"'; ?>  id="id_apellidos"/><br><br>
		<label for="id_email">Email: </label>
		<input type="text" name="email" <?php if(isset($_POST["email"])) echo 'value="'.$_POST["email"].'"'; ?> id="id_email"/><br><br>
		<label for="id_pass">Contraseña: </label>
		<input type="password" name="pass"  id="id_pass"/><br><br>
		Sexo:<br>
		<label for="id_hombre">Hombre</label>
		<input type="radio" name="sexo" id="id_hombre" value="hombre" <?php if(isset($_POST["nombre"])){echo $cselct1;}?> />
		<label for="id_hombre">Mujer</label>
		<input type="radio" name="sexo" id="id_mujer" value="mujer" <?php if(isset($_POST["nombre"])){echo $cselct2;}?> /><br><br>
		Restaurantes:<br>
		<label for="id_pizzeria">Pizzer&iacute;a</label>
		<input type="checkbox" name="restaurantes[1]" id="id_pizzeria" value="pizzeria"<?php ?>/><br>
		<label for="id_mexicano">Mexicamo</label>
		<input type="checkbox" name="restaurantes[2]" id="id_mexicano" value="mexicano" checked="checked"/><br>
		<label for="id_gallego">Gallego</label>
		<input type="checkbox" name="restaurantes[3]" id="id_gallego" value="gallego" disabled="disabled" /><br><br>
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
					
if (isset($_POST["enviar"])){
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

			
	}

	if(strlen($nombre)>=5){
			
		echo "Nombre: ".$nombre."<br>";
		echo "Apellidos: ".$apellidos."<br>";
		echo "Contraseña: ".$pass."<br>";
		echo "Sexo: ".$sexo."<br>";
		echo "Restaurantes: ".$restaurantes."<br>";
		echo "Musica: ".$musica."<br>";
	
		}else{
			
			 $con =1;
			formu($con);

		}
	}else{
		$con =0;
		formu($con);
	}

include 'footer.php';

?>