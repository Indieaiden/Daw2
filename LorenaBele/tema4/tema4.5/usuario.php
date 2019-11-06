<?php
include '../../tema2/header.php';
echo "<style>
		.enter {
		
		margin-left:300px;}
		</style>";
?>
<h1>Identificaci&oacute;n de usuario</h1>
<form action="mensaje.php" method="get">
<label for="id_cadena">Nombre   : </label>
<input type="text" name="nombre" id="id_nombre" >
<br/>
<br/>
<label for="id_password">Password :</label>
<input type="text" name="pass" id="id_password" >
<br/>
<br/>
<input type='submit' value='Entrar' class="enter">
</form>
<?php
include '../../tema2/footer.php';
?>
