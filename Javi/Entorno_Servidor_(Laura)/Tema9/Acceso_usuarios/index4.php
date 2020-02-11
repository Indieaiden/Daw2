<!DOCTYPE html>
<?php
if (!$_SERVER['PHP_AUTH_USER'] || !valida_usuario()){
  //header("WWW-Authenticate: Basic");
  header('WWW-Authenticate: Basic realm="Contenido restringido", charset="UTF-8"');//comprueba que tenga charset UTF-8
  header('HTTP/1.0 401 Unauthoreized');
  echo 'Usuario no reconocido!!!';

}

function valida_usuario(){
  $usr = $_SERVER['PHP_AUTH_USER'];
  $pwd = $_SERVER['PHP_AUTH_PW'];
  return (strcmp($usr, 'laura')===0 && strcmp($pwd, '1234')===0);
}
//Aqui SI reconoce usuario
?>

<html lang="es">
<head>
  <title>Título de la WEB</title>
  <meta charset="UTF-8">
  <meta name="title" content="Título de la WEB">
  <meta name="description" content="Descripción de la WEB">
  <link href="http://dominio.com/hoja-de-estilos.css"rel="stylesheet" type="text/css"/>
</head>
<body>
  <header>
    <h1>Bienvenido <?php
    echo $_SERVER['PHP_AUTH_USER']; ?></h1>
  </header>
  <nav>
    <?php
    echo ' Información del usuario autenticado<br>';

    foreach(array('PHP_AUTH_USER','PHP_AUTH_PW','AUTH_TYPE') as $clave){

      echo $clave.': ' .$_SERVER[$clave].'<br>';
    }
    ?>
  </nav>
  <footer>
  </footer>
</body>
</html>
