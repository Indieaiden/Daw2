<?php
$imagen= imagecreate(600, 100); // ancho x alto

//Propio - Definir colores con porcentajes recibidos
$red = 0;
$green = 0;
$blue = 0;
if (isset($_GET['red'])) {
  if (!empty($_GET['red'])) {
    if ($_GET['red']>=100) {//si es superior al 100% definimos el color maximo
      $red=255;
    }elseif ($_GET['red']<=0) {//si es inferior al 0% definimos el color maximo
      $red=0;
    }else{//calculamos %definido
      $red=255*100/$_GET['red'];
    }
  }
}
if (isset($_GET['green'])) {
  if (!empty($_GET['green'])) {
    if ($_GET['green']>=100) {
      $green=255;
    }elseif ($_GET['green']<=0) {
      $green=0;
    }else{
      $green=255*100/$_GET['green'];
    }
  }
}
if (isset($_GET['blue'])) {
  if (!empty($_GET['blue'])) {
    if ($_GET['blue']>=100) {
      $blue=255;
    }elseif ($_GET['blue']<=0) {
      $blue=0;
    }else{
      $blue=255*100/$_GET['blue'];
    }
  }
}

$color_fondo= imagecolorallocate($imagen,100,255,255);// establece color de fondo
$color_texto = imagecolorallocate($imagen,$red,$green,$blue);//Establece color del texto

$fuente = "CHILLER.TTF";
$texto = "texto de prueba";

if (isset($_GET['fuente'])) {
  $fuente=$_GET['fuente'];// ruta....?fuente="loquesea.ttf"
}
if (isset($_GET['texto'])) {
  if (!empty($_GET['texto'])) {
    $texto=$_GET['texto'];// ruta....?fuente="loquesea.ttf"
  }
}


imagettftext($imagen,25,0,15,55,$color_texto,"C:/xampp/htdocs/Daw2/Javi/Entorno_Servidor_(Laura)/Tema10/ImagenCabecera/Imagen_con_textos/Textos_fuentes_inclinacion/fonts/".$fuente,$texto);
// (Imagen a poner, tamaño de la fuente (como word), angulo, ejex, ejey, Color,ruta absolita fuente, texto)
header("Content-type: image/png");// envía imagen tras la cabecera
imagepng($imagen);
imagedestroy($imagen);
?>
