<?php
$imagen= imagecreate(300, 30); // ancho x alto
$fondo= imagecolorallocate($imagen,100,255,0);// establece color de fondo
header("Content-type: image/png");// envía imagen tras la cabecera
imagepng($imagen);
imagedestroy($imagen);
?>
