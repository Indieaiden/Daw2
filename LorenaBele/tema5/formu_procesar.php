<?php
include '../tema2/header.php';

if(empty($_POST["nombre"]) || empty( $_POST["apellidos"] ) || empty( $_POST["email"] ) || empty($_POST["pass"])|| empty($_POST["sexo"])|| empty($_POST["restaurantes"]) || empty($_POST["musica"])){	
	echo "¡Oh!, parece que no has introducido todos los datos.<u><a href='formu_registro.php'>Click aquí para volver al formulario.</a></u>";
}else{
	$nombre= $_POST["nombre"];
	$apellidos= $_POST["apellidos"];
	$pass= $_POST["pass"];
	$sexo= $_POST["sexo"];
	$restaurantes= implode(", ",$_POST["restaurantes"]);
	$musica=implode(", ",$_POST["musica"]);

	echo "Nombre: ".$nombre."<br>";
	echo "Apellidos: ".$apellidos."<br>";
	echo "Contraseña: ".$pass."<br>";
	echo "Sexo: ".$sexo."<br>";
	echo "Restaurantes: ".$restaurantes."<br>";
	echo "Musica: ".$musica."<br>";
}
include '../tema2/footer.php';
?>