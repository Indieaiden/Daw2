<?php
$imagen=imagecreatefromjpeg("../Nature/liebre.jpg");
$colorblanco = imagecolorallocate($imagen,255,255,255);

imagestring($imagen,5,5,5,'2',$colorblanco);// (Imagen a poner, tamaño del 1-5, ejex, ejey, Color)
header("Content-type: image/jpeg");// envía imagen tras la cabecera
imagejpeg($imagen);


 ?>
