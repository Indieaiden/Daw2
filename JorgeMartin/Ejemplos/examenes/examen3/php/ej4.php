<?php
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"><h1>Consulta fichero y cookie</h1><br>
<label for="id_fich">Nombre del fichero (ej: log.txt)</label>
<input type="text" name="fich" id="id_fich"/><br>
<label for="id_cookie">Nombre de la cookie:</label>
<input type="text" name="cookie" id="id_cookie"/><br>
<input type="submit" value="Enviar" name='enviar'/>
</form>
<?php
function mostrarFichero($fichero){
	$fp=fopen($fichero, "r");
	$texto= fread($fp, filesize($fichero));
	$texto= nl2br($texto);
	echo $texto;
	echo "<a href=\"ej4.php\"><u>Click aquí para volver al formulario</u></a>";
}

function mostrarLineasCookie($fichero,$cookie){
	
	$archivo = fopen($fichero,'r');
	$texto="";
	while (!feof($archivo)){
		$linea = fgets($archivo);
		if(strpos($linea, "Nombre de la cookie ".$cookie)!=false){
				$texto=$texto.$linea. PHP_EOL;
		}
	}
	echo $texto;
	echo "<br><a href=\"ej4.php\"><u>Click aquí para volver al formulario</u></a>";
}
if(isset($_GET["fich"])){
	$fichero=$_GET["fich"];
	$nombre=$_GET["cookie"];
	if(file_exists($fichero)){
		if(empty($nombre)){
			mostrarFichero($fichero);
		}else{
			mostrarLineasCookie($fichero,$nombre);
		}
	}else{
		echo "ERROR: El fichero $fichero no existe";
	}
	
}
?>