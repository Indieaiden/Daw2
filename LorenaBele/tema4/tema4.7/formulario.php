<?php
include '../../tema2/header.php';
?>

<h1>Bienvenido al mundo de las cadenas </h1>
<form action="procesar.php" method="post">
<label for="id_cadena">Introduce la cadena que deseas modificar :</label>
<input type="text" name="cadena1" id="id_cadena">
<br/>
<br/>
<fieldset>
	<legend>Opciones a modificar </legend>
	<label> <input type='radio' name='opcion' 
			value='minusculas'>Poner en minusculas</label>
			<label> <input type='radio' name='opcion' 
			value='longitud'>Medir la longitud</label>
			<label> <input type='radio' name='opcion' 
			value='mayusculas'>Primer caracter en may&uacute;scula</label>
			<label> <input type='radio' name='opcion' 
			value='asci'>C&aacute;racter asci</label>
			<label> <input type='radio' name='opcion' 
			value='espacio'>Elimina espacios al principio</label>
			<label> <input type='radio' name='opcion' 
			value='extraer'>Extraer 5 caracteres</label>
			
			<label> <input type='radio' name='opcion' 
			value='invierte'>Invierte la cadena</label>
			<label> <input type='radio' name='opcion' 
			value='caracteres'>Añade hasta que tenga 5 </label>
			<label> <input type='radio' name='opcion' 
			value='cadena'>Sustituye en cadena la letra a</label>
</fieldset>			
<input type='submit' value='enviar'>
</form>
<?php
include '../../tema2/footer.php';
?>
