<?php
$imagen=imagecreatefromgif("vaatit.gif");

//envua imagen
header("Content-type: image/gif");// envía imagen tras la cabecera
imagegif($imagen);
imagedestroy($imagen);

 ?>
