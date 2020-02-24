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
		<style>
		a{
			text-decoration: none;
			color: BlueViolet;
		}
		a:visited{
			color: darkorange;
		}
		a:hover {
			color: red;
		}
		table, td,tr{
			border: 1px solid black;
			border-collapse: collapse;;
		}
		table td{
			background: cornsilk;
		}
		table td.td-header{
			background: crimson;
		}
		</style>
	</head>
	<body>
	<?php
}
 ?>
