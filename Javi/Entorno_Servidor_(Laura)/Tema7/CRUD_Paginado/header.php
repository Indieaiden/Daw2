<?php
function creaHeader($titulo = "CRUD", $desc = "Pagina principal" , $autor = "Javier_Fernandez"){
	?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title><?php echo $titulo; ?></title>
		<meta name="description" content="<?php echo $desc; ?>">
		<meta name="author" content="<?php echo $autor; ?>">
		<link rel="stylesheet" type="text/css" href="CRUD_CSS.css">
	</head>
	<body>
	<?php
}
 ?>
