<?php
function creaHeader($titulo = "CRUD", $desc = "Pagina principal" , $autor = "Javier_Fernandez"){
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
		table{
			width: 60%;
			margin-left:auto;
	    margin-right:auto;
			border: 1px dotted black;
		}
		body{
			text-align: center;
		}
		</style>
	</head>
	<body>
	<?php
}
 ?>
