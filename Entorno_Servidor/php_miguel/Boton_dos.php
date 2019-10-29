<!DOCTYPE html>
	<head>
		<Title> Hello World </Title>
	</head>
	<body>
		<?php
		$fichero = $_FILES['fichero'];
		
		echo"<pre>";
		print_r($fichero);
		echo"</pre>";
		
		if(is_uploaded_file ($_FILES['fichero']['tmp_name']))
		{
			$nombreDirectorio = $_SERVER['DOCUMENT_ROOT']."/Archivos/";
			$idUnico =time();
			$nombreFichero = $idUnico ."-".$_FILES['fichero']['name'];
			$nombreFichero = $_SERVER['DOCUMENT_ROOT']."/Archivos/".$nombreFichero;
			if (move_uploaded_file ($_FILES['fichero']['tmp_name'], $nombreFichero)){
						echo "El fichero se ha movido correctamente<br>";
				}else{ echo"se ha producido un error al mover el fichero<br>";}
		}
			
		switch ($_FILES['fichero']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }
		?>
	</body>
</html>