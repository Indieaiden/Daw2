<?php
include 'header.php';
?>

<form action="formu_procesar.php" method="post">
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
<input type="submit" value="Enviar"/>
</form>
<?php
include 'footer.php';
?>
