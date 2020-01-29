<?php
function creaHeader($titulo = "Index", $desc = "Pagina principal" , $autor = "Javier_Fernandez" , $dirCss = "./css.css"){
	echo "<!DOCTYPE html>";

	?>
	<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title><?php echo $titulo; ?></title>
		<meta name="description" content="<?php echo $desc; ?>">
		<meta name="author" content="<?php echo $autor; ?>">
		<link rel="stylesheet" href="<?php echo $dirCss; ?>">
	</head>
	<body>
	<?php
}
 ?>
