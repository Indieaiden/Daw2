<!--PHP que nos imprima usando las constantes magicas
PHP que use una funcion cada vez que se invoque una funcion guarde con la cosntantes magicas-->
<?php
include("./header.php");
?>
<h2>Log Guardado en el archivito!</h2>
<!--fopen(ruta,tipo(r,w,a,c,x)), fread(), fwrite(), fclose()-->
<?php
  function loggg(){
    $arch = "log.txt";//localizacion del archivo
    $arcabr = fopen("$arch","a+"); //Abrimos archivo
    $datos = "Hora del log: ".date("D d,F H:i:s").", Funcion a la que se llama: ".__FUNCTION__.", Archivo en: ".__FILE__.", directorio del archivo: ".__DIR__.", Linea quen la que se encuentra la funcion: ".__LINE__.".\n";
    fwrite($arcabr,$datos);//Escribir en el fichero almacenado en $arch
    fclose($arcabr);
  }
  loggg();
?>
<?php
include("footer.php");
?>
