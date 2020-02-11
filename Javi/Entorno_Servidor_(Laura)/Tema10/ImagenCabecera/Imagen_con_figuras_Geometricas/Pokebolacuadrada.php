<?php
$imagen= imagecreate(300, 300); // ancho x alto
$color_fondo= imagecolorallocate($imagen,100,255,255);// establece color de fondo
$color_rojoscuro = imagecolorallocate($imagen,0xff,0x0f,0x0f);
$colorblanco = imagecolorallocate($imagen,255,255,255);
$colornegro= imagecolorallocate($imagen,0,0,0);

//rectangulo superior
imagerectangle($imagen, 50, 50, 250, 150, $colornegro );// pinta bordes (Imagen a poner, x posicion arribaderecha, y posicion arribaderecha, x posicion abajoderecha, y posicion abajoderecha, color )
imagefilledrectangle($imagen, 51, 51, 249, 149, $color_rojoscuro );
//rectanfulo inferior
imagerectangle($imagen, 50, 150, 250, 250, $colornegro );// pinta bordes (Imagen a poner, x posicion arribaderecha, y posicion arribaderecha, x posicion abajoderecha, y posicion abajoderecha, color )
imagefilledrectangle($imagen, 51, 151, 249, 249, $colorblanco );
//redondel central
imagearc($imagen, 150, 150, 75, 75, 0, 360, $colornegro);//( $imagen, xcentro, yccentro, ancho, alto, inicio angulo, fin angulo, $color)
imagefilledarc( $imagen, 150, 150, 73, 74, 0, 360, $colorblanco ,IMG_ARC_PIE);//( $imagen, xc, yc, ancho, alto, gi, gf, $color1,IMG_ARC_PIE)

//redondel del redondel
imagearc($imagen, 150, 150, 40, 40, 0, 360, $colornegro);//( $imagen, xcentro, yccentro, ancho, alto, inicio angulo, fin angulo, $color)
imagefilledarc( $imagen, 150, 150, 38, 38, 0, 360, $colorblanco ,IMG_ARC_PIE);//( $imagen, xc, yc, ancho, alto, gi, gf, $color1,IMG_ARC_PIE)


header("Content-type: image/png");// envía imagen tras la cabecera
imagepng($imagen);
imagedestroy($imagen);
?>
