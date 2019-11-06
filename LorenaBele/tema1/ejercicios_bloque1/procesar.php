<?php
if(empty($_POST["nombre"]) || empty( $_POST["apellido"] ) || empty($_POST["edad"])|| empty($_POST["sexo"])){	

	echo "hay algun campo vacio <br/>";
	echo "<a href='formulario.php'>corrige el error</a>";
	
}else{
	
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$edad=$_POST["edad"];
	$sexo=$_POST["sexo"];
	
	
	echo $nombre;
	echo $apellido;
	echo $edad;
	echo $sexo;
	
}

?>