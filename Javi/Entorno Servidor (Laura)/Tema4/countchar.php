<!DOCTYPE html>
<html lang="es" >
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Formulario funciones String">
    <meta name="author:" content="Javier Fernandez">
    <title>Formulario funciones String</title>
  </head>
  <body>
    <?php
      $nepe="hola numero 1"
      $chor = (count_chars($nepe,1));
      foreach ($chor as $i => $val) {
        echo "está $val de \"" , chr($i) , "\" en la cadena.\n";
      }//NO PUTOFUNCIONA
     ?>
  </body>
</html>
