<?php
header('Content-type: application/pdf' ); //decimos que el archivo va a ser un PDF
//header('Content-Disposition: attachment; filename="05_33_imagenes_1.pdf" ');  //Lo descarga
header('Content-Disposition: inline; filename="05_33_imagenes_1.pdf" '); //Lo muestra
readfile('05_33_imagenes_1.pdf');//lo lee
 ?>
