<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>INICIO</title>
</head>
<body>
  <?php
  function filtrado($datos){
    $datos= trim($datos); //Elimina espacios
    $datos= stripslashes($datos); //Elimina el caracter \
    $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
    return $datos;
  }
  $nombre;
  $dificultad;
  $idioma;
  $nivelesEs= array("muy_facil","facil","normal","avanzado","experto");
  $nivelesEng= array("too_easy","easy","normal","advanced","expert");
  if (!empty($_COOKIE)) {
    foreach ($_COOKIE as $key => $value) {
      if ($key=="nombre") {
        $nombre=$value;
      }elseif ($key=="idioma") {
        $idioma=$value;
      }elseif ($key=="nivel") {
        $dificultad=$value;
      }
    }
    if ($idioma=="ingles") {
      ?>
      <h1>HELLO <?php echo $nombre; ?></h1>
      <h3>LEVEL: <?php echo $nivelesEng[$dificultad]; ?></h3>
      <?php
    }elseif ($idioma=="español") {
      ?>
      <h1>HOLA <?php echo $nombre; ?></h1>
      <h3>NIVEL: <?php echo $nivelesEs[$dificultad]; ?></h3>
      <?php
    }?>
    <?php
  }else{
    echo "ACCESO DENEGADO<br/>";
  }


   ?>
</body>
</html>
