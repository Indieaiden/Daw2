<!DOCTYPE html>
<html lang="es">
<head>
  <title>Título de la WEB</title>
  <meta charset="UTF-8">
  <meta name="title" content="Título de la WEB">
  <meta name="description" content="Descripción de la WEB">
  <link href="http://dominio.com/hoja-de-estilos.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <header>
    <h1>Bienvenido <?php
    echo $_SERVER['PHP_AUTH_USER']; ?></h1>
  </header>
  <nav>
    <?php
    echo 'Información del usuario autenticado <br>';
    foreach(array('PHP_AUTH_USER', 'PHP_AUTH_PW','AUTH_TYPE') as $clave){
      echo $clave.': ' . $_SERVER[$clave].'<br>';
    }
    ?>
  </nav>
  <footer>
  </footer>
</body>
</html>
