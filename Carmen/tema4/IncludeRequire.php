<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Include y require</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php
			include_once("../tema1/header.php");
			require_once("../tema1/footer.php");
	
			$f_inc = get_included_files();
			foreach ( $f_inc as $clave=>$valor){
				echo "Fichero nº: ",$clave," nombre: ",$valor,"<br>";
			}
			
			$f_req = get_required_files();
			foreach ( $f_req as $clave=>$valor){
				echo "Fichero nº: ",$clave," nombre: ",$valor,"<br>";
			}
		?>
	</body>
</html>