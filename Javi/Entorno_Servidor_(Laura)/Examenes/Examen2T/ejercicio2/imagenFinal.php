<?php
//se recibe por GET los datos: "numimagen" (1,2,3,4,5 u otro) "forma" (h,v,a,n)


if ($_GET['numimagen']==1) {
  $imagen=imagecreatefromjpeg("Nature/ardilla.jpg");
} elseif ($_GET['numimagen']==2) {
  $imagen=imagecreatefromjpeg("Nature/liebre.jpg");
} elseif ($_GET['numimagen']==3) {
  $imagen=imagecreatefromjpeg("Nature/otro.jpg");
} elseif ($_GET['numimagen']==4) {
  $imagen=imagecreatefromjpeg("Nature/panda.jpg");
} elseif ($_GET['numimagen']==5) {
  $imagen=imagecreatefromjpeg("Nature/tucan.jpg");
}else{
  $imagen= imagecreate(300, 100); // ancho x alto
  $color_fondo= imagecolorallocate($imagen,100,255,255);// establece color de fondo
  $color_rojoscuro = imagecolorallocate($imagen,0xff,0x0f,0x0f);

  imagestring($imagen,5,40,40,'Numero de imagen no valida',$color_rojoscuro);// (Imagen a poner, tamaño del 1-5, ejex, ejey, Color)
}

header("Content-type: image/jpeg");// envía imagen tras la cabecera

if ($_GET['forma']=="h") {
imageflip($imagen, IMG_FLIP_HORIZONTAL);
}else if ($_GET['forma']=="v") {
imageflip($imagen, IMG_FLIP_VERTICAL);
}else if ($_GET['forma']=="a") {
imageflip($imagen, IMG_FLIP_BOTH);
}

imagejpeg($imagen);
imagedestroy($imagen);


 ?>
