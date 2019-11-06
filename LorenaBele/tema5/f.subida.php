<?php
	include '../tema2/header.php';

if(isset($_POST["enviar"])){	
	if(is_uploaded_file($_FILES["archivo"]["tmp_name"])){
		$nombreDire ="Nueva carpeta/";
		$nFichero=$_FILES["archivo"]["name"];
		$nCompleto =$nombreDire.$nFichero;
		move_uploaded_file($_FILES["archivo"]["tmp_name"], $nombreDire.$nFichero);

	
	}
}else{
?>
	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<label for="id_archivo">Sube un archivo: </label>
	<input type="hidden" name="max_file_size" value="10002400"/><br><br>
	<input type="file" name="archivo" id="id_archivo"/><br><br>
	<button type="submit" value="Enviar" name="enviar">enviar</button>
	</form>
<?php	
}
include '../tema2/footer.php';

?>	
