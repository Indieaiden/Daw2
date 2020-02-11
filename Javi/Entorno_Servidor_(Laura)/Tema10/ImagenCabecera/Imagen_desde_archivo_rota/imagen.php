<?php
$imagen=imagecreatefromgif("vaa.gif");//nos apareceria un cuadro negro

//envua imagen
//quitamos header para quitar la info y asi vemos el error en el navegador
//header("Content-type: image/gif");// envía imagen tras la cabecera
imagegif($imagen);
imagedestroy($imagen);

 ?>
