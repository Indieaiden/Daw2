<?php
include '../../tema2/header.php';
echo "<style>
		.p1 {
		text-indent:20px;}
		.com {
		align:top;}
		.enter {	
		margin-left:300px;}
		label{
			width:50px;
		}
		</style>";
if(isset($_GET["nombre"])and isset($_GET["pass"])){

	$nombre=$_GET["nombre"];
	$pass=$_GET["pass"];
	
	if(strrev($nombre)==$pass){
	
	
	?>	
	<p class="p1">Bienvenido al Foro,usuario <?php echo $nombre?><p/>
	por favor indique el tema sobre el que realiza su<br/>
	comentario,gracias
	<form action="mensaje.php" method="get">
	<label for="id_cadena" >Tema : </label>
	<input type="text" name="tema" id="id_tema" >
	<br/>
	<br/>
	<label for="id_comenario" class="com">Comentario </label>
	<textarea name="comentario" id="id_comentario" rows="3" cols="40"></textarea>
	<input type='submit' value='Detalles' class="enter">
	</form>
	
<?php
	
	}else{
		echo "la contraseña es incorrecta";
		echo "<a href=\"usuario.php\">Volver al formulario</a>";
	}
	
}else{
	echo"error algun campo vacio";
	echo "<a href=\"usuario.php\">Volver al formulario</a>";
}


include '../../tema2/footer.php';
?>
