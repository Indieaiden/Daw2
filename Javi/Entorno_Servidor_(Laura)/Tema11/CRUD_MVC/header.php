<?php
function creaHeader($titulo = "MVC", $desc = "Pagina principal" , $autor = "Javier_Fernandez"){
	?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title><?php echo $titulo; ?></title>
		<meta name="description" content="<?php echo $desc; ?>">
		<meta name="author" content="<?php echo $autor; ?>">
		<link rel="stylesheet" href="MVC/Vista/CRUD_CSS.css">
	</head>
	<body>
	<?php
}
 ?>
