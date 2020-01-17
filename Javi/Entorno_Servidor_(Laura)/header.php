<?php
function creaHeader($titulo = "Index", $desc = "Pagina principal" , $autor = "Javier_Fernandez"){
	?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title><?php echo $titulo; ?></title>
		<meta name="description" content="<?php echo $desc; ?>">
		<meta name="author" content="<?php echo $autor; ?>">
		<style>
		a:hover {
			color: red;
		}
		</style>
	</head>
	<body>
	<?php
}
 ?>
