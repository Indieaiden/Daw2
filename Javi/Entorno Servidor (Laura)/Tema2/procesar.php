<?php
	if (isset($_POST["nombre"])){
		echo $_POST["nombre"]."<br/>";
	}else{
		echo "Falta incluir el nombre <br/>";
	}
	if (isset($_POST["contrasena"])){
		echo $_POST["contrasena"]."<br/>";
	}else{
		echo "Falta incluir una contraseña <br/>";
	}
	if (isset($_POST["sexo"])){
		echo $_POST["sexo"]."<br/>";
	}else{
		echo "Falta incluir opcion de sexo <br/>";
	}
	if (isset($_POST["aficiones"])){
		print_r ($_POST["aficiones"]);
	}else{
		echo "¿Que aficiones tienes? ";
	}
?>