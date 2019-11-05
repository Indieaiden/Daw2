<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejercicip10</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<?php
			$biblioteca = array(
				array("titulo"=>"casacada","Autor"=>"Camilo José Cela","Editorial"=>"Santillana","Año"=>1987,"enPrestamo"=>True),
				array("titulo"=>"casacada","Autor"=>"Camilo José Cela","Editorial"=>"Santillana","Año"=>1987,"enPrestamo"=>False),
				array("titulo"=>"casacada","Autor"=>"Camilo José Cela","Editorial"=>"Santillana","Año"=>1987,"enPrestamo"=>True)
				
			);
			$Prestamo = 0;
			foreach ($biblioteca as $libro){
				$Prestamo += (int) $libro["enPrestamo"];
			}
			echo $Prestamo;
		?>
	</body>
</html>