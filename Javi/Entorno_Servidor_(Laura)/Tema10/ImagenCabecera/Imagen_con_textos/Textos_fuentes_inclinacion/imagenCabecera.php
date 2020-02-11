<?php
header('Content-type: image/png' ); //decimos que el archivo va a ser un PDF
//header('Content-Disposition: attachment; filename="05_33_imagenes_1.pdf" ');  //Lo descarga
header('Content-Disposition: inline; filename="BackgroundRuneterra.png" '); //Lo muestra
readfile('BackgroundRuneterra.png');//lo lee
 ?>
