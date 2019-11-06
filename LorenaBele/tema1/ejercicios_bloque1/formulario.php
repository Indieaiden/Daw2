<?php
include 'header.php';
?>
<form action="procesar.php" method="post">
	<label for='id_nombre'>Nombre :</label>
	<input type='text' name='nombre' id='id_nombre'/><br/>
	<label for='id_apellido'>Apellido :</label>
	<input type='text' name='apellido' id='id_apellido'/><br/>
	<label for='id_edad'>Edad :</label>
	<input type='text' name='edad' id='id_edad'/><br/>
	<label for='id_mujer'>Mujer:</label>
	<input type='radio'  id='id_mujer' name='sexo' value='mujer'/>
	<label for='id_hombre'>Hombre:</label>
	<input type='radio' id='id_hombre' name='sexo' value='hombre'/><br/>
	<input type='submit' value='Enviar'/>
</form>

<?php
include 'footer.php';
?>