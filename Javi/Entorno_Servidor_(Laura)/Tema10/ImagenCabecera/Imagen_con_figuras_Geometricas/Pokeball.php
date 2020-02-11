<?php
$imagen= imagecreate(300, 300); // ancho x alto
$color_fondo= imagecolorallocate($imagen,100,255,255);// establece color de fondo
$color_rojoscuro = imagecolorallocate($imagen,0xff,0x0f,0x0f);
$colorblanco = imagecolorallocate($imagen,255,255,255);
$colornegro= imagecolorallocate($imagen,0,0,0);
$colorflora= imagecolorallocate($imagen,0xFF,0xF0,0xF0);

//circulo superior
imagearc($imagen, 150, 150, 201, 201, 180, 0, $colornegro);//( $imagen, xcentro, yccentro, ancho, alto, inicio angulo, fin angulo, $color)
imagefilledarc($imagen, 150, 150, 200, 200, 180, 0, $color_rojoscuro ,IMG_ARC_PIE );//( $imagen, xc, yc, ancho, alto, gi, gf, $color1,IMG_ARC_PIE)
//rectanfulo inferior
imagearc($imagen, 150, 150, 201, 201, 360, 180, $colornegro);
imagefilledarc($imagen, 150, 150, 200, 200, 360, 180, $colorblanco ,IMG_ARC_PIE );//IMG ARC PIE dibuja el quesito
//redondel central
imagearc($imagen, 150, 150, 75, 75, 0, 360, $colornegro);
imagefilledarc( $imagen, 150, 150, 73, 74, 0, 360, $colorflora ,IMG_ARC_PIE);

//redondel del redondel
imagearc($imagen, 150, 150, 40, 40, 0, 360, $colornegro);
imagefilledarc( $imagen, 150, 150, 38, 38, 0, 360, $colorflora ,IMG_ARC_PIE);


header("Content-type: image/png");// envía imagen tras la cabecera
imagepng($imagen);
imagedestroy($imagen);
?>
