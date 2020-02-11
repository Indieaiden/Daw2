<?php
$imagen= imagecreate(300, 300); // ancho x alto
$color_fondo= imagecolorallocate($imagen,100,255,255);// establece color de fondo
$color_rojoscuro = imagecolorallocate($imagen,0xff,0x0f,0x0f);

$fuente = "CHILLER.TTF";

if (isset($_GET['fuente'])) {
  $fuente=$_GET['fuente'];// ruta....?fuente="loquesea.ttf"
}

imagettftext($imagen,25,20,100,150,$color_rojoscuro,"C:/xampp/htdocs/Daw2/Javi/Entorno_Servidor_(Laura)/Tema10/ImagenCabecera/Imagen_con_textos/Textos_fuentes_inclinacion/fonts/".$fuente,"qwertyuiop");
// (Imagen a poner, tamaño de la fuente (como word), angulo, ejex, ejey, Color,ruta absolita fuente, texto)
header("Content-type: image/png");// envía imagen tras la cabecera
imagepng($imagen);
imagedestroy($imagen);
?>
