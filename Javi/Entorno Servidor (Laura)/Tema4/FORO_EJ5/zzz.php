<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="author" content="Javier">
  <meta name="description" content="resultado escribir foro">
</head>
<body>
  <?php
  if (isset($_POST["send"])) {
    $arraypalabras = explode(" ",$_POST['texto']);
    $letras = array();//array que recogerá el numero de letras
    $palabrasusadas = array();
    for ($i=0; $i < strlen($_POST['texto']); $i++) {
      $letras [strtolower(substr($_POST['texto'], $i, 1))] = (mb_substr_count($_POST['texto'],strtolower(substr($_POST['texto'], $i, 1)))) ;
    }
    $masusada="";
    $cantidad = 0;
    foreach ($letras as $key => $value) {
      if ($value > $cantidad) {
        if (!($key==" ")) {
          $masusada=$key;
          $cantidad=$value;
        }
      }
    }
    print_r($arraypalabras);//nosehacerlo

    ?>
    <input type="hidden" name="usuario" value="<?php echo $_POST["usuario"] ;?>">
    <input type="hidden" name="pwd" value="<?php echo $_POST["pwd"] ;?>">
    <table>
      <caption>INFORME SOBRE L COMENTARIO<br></caption>
      <tr>
        <td>Longitud: </td>
        <td><input type="text" name="longitud" value="<?php echo (strlen($_POST["texto"])); ?>" readonly="readonly"></td>
      </tr>
      <tr>
        <td>Numero de palabras: </td>
        <td><input type="text" name="longitud" value="<?php echo count($arraypalabras); ?>" readonly="readonly"></td>
      </tr>
      <tr>
        <tr>
          <td>Letra + repetida: </td>
          <td><input type="text" name="longitud" value="<?php echo($masusada); ?>" readonly="readonly"></td>
        </tr>
        <tr>
          <tr>
            <td>Palabra + repetida: </td>
            <td><input type="text" name="longitud" value="Killme" readonly="readonly"></td>
          </tr>
          <tr>
            <td> <input type="submit" name="mensajes" value="Terminar"></td>
          </tr>
        </table>
        <?php
      } else if(isset($_POST["logout"])) {
        header('Location: login.php');
      } else {
        ?>
        <h1>Acceso dengado</h1>
        <?php
      }
      ?>
    </body>
    </html>
