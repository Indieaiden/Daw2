<?php
$imagen= imagecreate(300, 300); // ancho x alto
$color_fondo= imagecolorallocate($imagen,100,255,255);// establece color de fondo
$color_rojoscuro = imagecolorallocate($imagen,0xff,0x0f,0x0f);
$colornegro= imagecolorallocate($imagen,0,0,0);
$colorflora= imagecolorallocate($imagen,0xFF,0xF0,0xF0);
$colorAmarillo= imagecolorallocate($imagen,0xFF,0xF0,0x00);

//
imagefilledarc($imagen, 151, 151, 200, 200, 0, 90, $color_rojoscuro ,IMG_ARC_PIE );//( $imagen, xc, yc, ancho, alto, gi, gf, $color1,IMG_ARC_PIE)

//
imagefilledarc($imagen, 149, 151, 200, 200, 90, 180, $colorAmarillo ,IMG_ARC_EDGED|IMG_ARC_NOFILL );//( $imagen, xc, yc, ancho, alto, gi, gf, $color1,IMG_ARC_PIE)

//
imagefilledarc($imagen, 150, 150, 200, 200, 180, 270, $color_rojoscuro ,IMG_ARC_NOFILL );//( $imagen, xc, yc, ancho, alto, gi, gf, $color1,IMG_ARC_PIE)

//
imagefilledarc($imagen, 150, 150, 200, 200, 270, 360, $colornegro ,IMG_ARC_CHORD );//( $imagen, xc, yc, ancho, alto, gi, gf, $color1,IMG_ARC_PIE)


header("Content-type: image/png");// envía imagen tras la cabecera
imagepng($imagen);
imagedestroy($imagen);
?>
