<?php
include './header.php';
?>
<h1>Bienvenido al mundo de la multiplicaci&oacute;n</h1>
<form action="procesar.php" method="post">
<label for="id_numero">Desde el numero :</label>
<input type="text" name="numero1" id="id_numero">
<br/>
<br/>
<label for="id_numero2"> Hasta el numero :</label>
<input type="text" name="numero2" id="id_numero2">
<br/>
<br/>
<input type="submit"  value="Ver tabla">
</form>
<?php
include './footer.php';
?>
