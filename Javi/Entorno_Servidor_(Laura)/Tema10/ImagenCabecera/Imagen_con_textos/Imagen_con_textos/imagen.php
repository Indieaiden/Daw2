<?php
$imagen= imagecreate(300, 300); // ancho x alto
$color_fondo= imagecolorallocate($imagen,100,255,255);// establece color de fondo
$color_rojoscuro = imagecolorallocate($imagen,0xff,0x0f,0x0f);

imagestring($imagen,5,50,50,'ble',$color_rojoscuro);// (Imagen a poner, tamaño del 1-5, ejex, ejey, Color)
imagestring($imagen,4,50,100,'ble',$color_rojoscuro);// (Imagen a poner, tamaño del 1-5, ejex, ejey, Color)
imagestring($imagen,3,50,150,'ble',$color_rojoscuro);// (Imagen a poner, tamaño del 1-5, ejex, ejey, Color)
imagestring($imagen,2,50,200,'ble',$color_rojoscuro);// (Imagen a poner, tamaño del 1-5, ejex, ejey, Color)
imagestring($imagen,1,50,250,'ble',$color_rojoscuro);// (Imagen a poner, tamaño del 1-5, ejex, ejey, Color)
header("Content-type: image/png");// envía imagen tras la cabecera
imagepng($imagen);
imagedestroy($imagen);
?>
