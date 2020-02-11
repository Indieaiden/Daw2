<?php
function textoAzar( $longitud) {
  $patron='1234567890abcdefghijklmnopqrstuvwxyz';
  $key=’’;
  For ($i=0;$i<$longitud;$i++) {
    $key .= $patron{rand(0,35)
    };
  }
  return $key;
}
session_start();
$_SESSION['captcha']= textoAzar(8);
$img=imagecreate(75,20); // crea una imagen de 75 x 20
$fondo= imagecolorallocate($img,100,255,255); // estable color de fondo
$color_texto= imagecolorallocate($img,0,0,255); // establece color para el texto
imagestring($img,5,0,0,$_SESSION['captcha'],$color_texto); // Coloca texto en la imagen
// envía imagen tras la cabecera
header("Content-type: image/png");
imagepng($img);
?>
