<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $fichero = @fopen("archivo.txt","r");//Variable que almacena el fichero con control de error (@)
    if(!$fichero){//Comprobamos si el fichero existe
      die("No se ha podido encontrar el fichero");
    }
    echo ("And the mamma cry");

    @(!($fichero = @fopen("archivo.txt","r"))) or die ("<br>e.rar es de informaticos, no te preocupes");
    echo ("todo va bien")
     ?>
  </body>
</html>
