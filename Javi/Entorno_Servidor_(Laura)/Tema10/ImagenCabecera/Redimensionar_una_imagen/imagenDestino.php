<?php
$fichero = "vaati.gif";
$tamanio = getimagesize($fichero);
$porcentaje=1.50;
$alto=$tamanio[0];
$ancho=$tamanio[1];

//envua imagen
header("Content-type: image/gif");// envía imagen tras la cabecera

//nuevos tamaños
$nuevoalto=$alto*$porcentaje;
$nuevoancho=$ancho*$porcentaje;
$o_img=imagecreatefromgif($fichero);
$d_img = imagecreatetruecolor($nuevoancho, $nuevoalto);//donde se va a redimensionar la imagen
imagecopyresized( $d_img, $o_img,0,0,0,0, $nuevoancho, $nuevoalto, $ancho,$alto);

imagegif($d_img);//escribimos la imagen de destino
imagedestroy($d_img);

 ?>
