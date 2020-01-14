<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Resultado de tu formulario</title>
  <meta name="author" content="Javier">
  <meta name="description" content="resultado escribir foro">
</head>
<body>
  <?php
  /*FUNCIONES*/
  /*Funcion que te saca la palabra mas utilizada (sin optimizar)*/
  function letraMasUsada($array){
    $letras = array();//array que recogerá el numero de letras
    $palabrasusadas = array();
    for ($i=0; $i < strlen($array); $i++) {
      $letras [strtolower(substr($array, $i, 1))] = (mb_substr_count($array,strtolower(substr($array, $i, 1)))) ;
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
    echo $masusada;
  }
  /*Funcion para obtner la palabra mas utilizada*/
  function palabraMasUsada($texto){

    $arrayP = str_word_count(strtolower($texto), 1);
    $arrayContador = array_count_values($arrayP);//ver

    foreach ($arrayContador as $key => $value) {
      if (max($arrayContador)==$value) {
        echo $key;
      }
    }
  }
  /*PROGRAMA*/
  if (isset($_POST["send"])) {
    $arraypalabras = explode(" ",$_POST['texto']);

    ?>
    <form class="" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
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
            <td><input type="text" name="longitud" value="<?php echo(letraMasUsada($_POST['texto'])); ?>" readonly="readonly"></td>
          </tr>
          <tr>
            <tr>
              <td>Palabra + repetida: </td>

              <td><input type="text" name="longitud" value="<?php echo palabraMasUsada($_POST['texto']); ?>" readonly="readonly"></td>
            </tr>
            <tr>
              <td> <input type="submit" name="logout" value="Terminar"></td>
            </tr>
          </table>
        </form>
        <?php

      } else if(isset($_POST["logout"])) {
        header('Location: login.php');
      }else{
        ?>
        <h1>Acceso dengado</h1>
        <?php
      }
      ?>
    </body>
    </html>
