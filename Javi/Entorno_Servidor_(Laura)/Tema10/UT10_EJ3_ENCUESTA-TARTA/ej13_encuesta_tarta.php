<?php
$connection = mysqli_connect ("localhost", "encuesta", "1234", "mercados") or die ("No se puede conectar al servidor");

$instruccion = "select * from votos"; // Obtener datos actuales de la votación
$consulta = mysqli_query ( $connection, $instruccion) or die ("Fallo en la selección");
$resultado = mysqli_fetch_array ($consulta);

$votos1 = $resultado["votos1"];
$votos2 = $resultado["votos2"];
$totalVotos = $votos1 + $votos2;




if (($votos1==0)&&($votos2==0)) {
  $imagen= imagecreate(150, 50); // ancho x alto
  $color_negr=imagecolorallocate($imagen,0,0,0);
  $fondoImagen= imagecolorallocate($imagen,255,255,255);// establece color de fondo
  imagestring($imagen,3,25,25,'Sin resultado',$color_negr);// (Imagen a poner, tamaño del 1-5, ejex, ejey, Color)
}else{
  $imagen= imagecreate(200, 250); // ancho x alto
  $fondoImagen= imagecolorallocate($imagen,255,255,255);// establece color de fondo
  $color_si = imagecolorallocate($imagen,0xff,0x0f,0x0f);//rojo
  $color_no= imagecolorallocate($imagen,0x00,0xFF,0x0A);//amarillo
  $color_negro=imagecolorallocate($imagen,0,0,0);
  $pcvoto1=($votos1*100/$totalVotos)/100*360;
  //$pcvoto2=($votos2*100/$totalVotos)*360; //no es necesario

  //si => voto1
  imagefilledarc($imagen, 100, 100, 150, 150, $pcvoto1, 360, $color_si ,IMG_ARC_PIE );//( $imagen, xc, yc, ancho, alto, gi, gf, $color1,IMG_ARC_PIE)
  //no => voto2
  imagefilledarc($imagen, 100, 100, 150, 150, 0, $pcvoto1, $color_no ,IMG_ARC_PIE );//( $imagen, xc, yc, ancho, alto, gi, gf, $color1,IMG_ARC_PIE)
  //texto de la imagen
  imagestring($imagen,3,25,200,'Votos si: '.$votos1,$color_negro);// (Imagen a poner, tamaño del 1-5, ejex, ejey, Color)
  imagestring($imagen,3,25,225,'Votos no: '.$votos2,$color_negro);// (Imagen a poner, tamaño del 1-5, ejex, ejey, Color)
}

header("Content-type: image/png");// envía imagen tras la cabecera
imagepng($imagen);
imagedestroy($imagen);
?>
