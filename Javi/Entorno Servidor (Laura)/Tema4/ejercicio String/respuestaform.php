<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="description" content="respuesta formulario">
  <meta name="author:" content="Javier Fernandez">
  <title>X</title>
</head>
<body>
  <?php
  if (isset($_POST["resultado"])) {
    if (isset($_POST["opciones"])) {
      $valor = $_POST["opciones"];
      if ($valor=="o1") {
        echo strlen($_POST["testo"]);
      } else if ($valor=="o2") {
        echo ("¡¡".strtoupper($_POST["testo"])."!!");
      }else if ($valor=="o3"){
        echo ucwords($_POST["testo"]);
      }else if ($valor=="o4"){
        echo strtolower($_POST["testo"]);
      }else if ($valor=="o5"){
        echo ucfirst($_POST["testo"]);
      }else if ($valor=="o6"){
        echo ord($_POST["testo"]);
      }
    } else {
      echo "Debes de seleccionar una de las 6 opciones";
    }
  }else if (isset($_POST["resultado1"])) {
    if (isset($_POST["opciones2"])) {
      $valor = $_POST["opciones2"];
      if ($valor=="o7"){
        echo ltrim($_POST["testo1"]);
      }else if ($valor=="o8"){
        echo rtrim($_POST["testo1"]);
      }else if ($valor=="o9"){
        echo trim($_POST["testo1"]);
      }else if ($valor=="10"){
        echo chop($_POST["testo1"]);
      }
    } else {
      echo "Debes de seleccionar una de las 4 opciones";
    }
  }else if (isset($_POST["resultado2"])) {
    if (isset($_POST["opciones3"])) {
      $valor = $_POST["opciones3"];
      $cadena=$_POST["testo21"];
      $nuno= $_POST["n_n"];
      $ndos= $_POST["n_m"];
      if ($valor=="subs1") {
        echo substr($cadena,$nuno);
      } else if ($valor=="subs2") {
        echo substr($cadena,$nuno,$ndos);
      }
    } else {
      echo "Debes de seleccionar una de las 2 opciones";
    }
  }else if (isset($_POST["resultado3"])) {
    if (isset($_POST["opciones4"])) {
      $valor = $_POST["opciones4"];
      $cadena=$_POST["testo31"];
      $cadena2=$_POST["testo32"];
      $cadena3=$_POST["testo33"];
      $nuno= $_POST["nn_n"];
      if ($valor=="11"){
        echo strrev($cadena);
      }else if ($valor=="12"){
        echo str_replace($cadena,$cadena2,$cadena3);
      }else if ($valor=="13"){
        echo str_repeat($cadena,$nuno);
      }
    } else {
      echo "Debes de seleccionar una de las 3 opciones";
    }
  }
  ?>
</body>
</html>
