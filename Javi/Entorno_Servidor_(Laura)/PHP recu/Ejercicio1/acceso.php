<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ACCESO</title>
</head>
<body>
  <?php
  function filtrado($datos){
    $datos= trim($datos); //Elimina espacios
    $datos= stripslashes($datos); //Elimina el caracter \
    $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
    return $datos;
  }

  function pintaFormulario() {

    $argumentos = 0;

    if(func_num_args() > 0) {
      $argumentos = func_get_arg(0);
    }

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label for="nombre1">Nombre: </label><input type="text" id="nombre1" name="nombre1" <?php if(isset($argumentos['nombre'])) {echo "value = " . $argumentos['nombre'];} ?>> <br>
      <label for="nivel">Nivel: </label><br>
      <input type="radio" name="nivel" value="1" <?php if($argumentos['nivel'] == "1" || empty($argumentos['nivel'])){ echo 'checked="checked"';} ?>>1
      <input type="radio" name="nivel" value="2" <?php if($argumentos['nivel'] == "2"){ echo 'checked="checked"';} ?>>2
      <input type="radio" name="nivel" value="3" <?php if($argumentos['nivel'] == "3"){ echo 'checked="checked"';} ?>>3
      <input type="radio" name="nivel" value="4" <?php if($argumentos['nivel'] == "4"){ echo 'checked="checked"';} ?>>4
      <input type="radio" name="nivel" value="5" <?php if($argumentos['nivel'] == "5"){ echo 'checked="checked"';} ?>>5<br>

      <select name="idioma">
        <option value="español" <?php if($argumentos['idioma'] == "español") { echo 'selected';} ?>>Español</option>
        <option value="ingles" <?php if($argumentos['idioma'] == "ingles") { echo 'selected';} ?> >Inglés</option>
      </select> <br>

      <input type="submit" name="enviado" value="enviado">
    </form>
    <br>

    <?php
  }


  if(isset($_POST['enviado'])){

    $falta = array();
    $validado = true;

    foreach($_POST as $clave => $valor) {
      if(empty($_POST[$clave])){
        array_push($falta, $clave);
        $validado = false;
      }
    }

    if($validado){
      if (!empty($_POST["nombre1"])) {
        if(strlen($_POST["nombre1"])<=30){
          $fichero = @fopen("usuarios.txt","r") or die("No se ha podido encontrar el fichero");
          $flinea =fgets($fichero);
          $usuarios=explode('|', trim($flinea));
          foreach ($usuarios as $clavecita => $valor) {
            if ($_POST["nombre1"]==$valor) {
              $nombre = filtrado($_POST["nombre1"]);
              $dificultad=$_POST['nivel'];
              $idioma=$_POST['idioma'];
              setcookie("nombre",$nombre,time()+60,__DIR__);
              setcookie("nivel",$dificultad,time()+60,__DIR__);
              setcookie("idioma",$idioma,time()+60,__DIR__);
              header("Location: inicio.php");
            }
          }
          echo "El nombre de usaurio no existe<br>";
        }else {
          pintaFormulario($_POST);
          echo "El nombre no puede tener mas de 30 caracteres <br>";
        }
      }
    }else {
      pintaFormulario($_POST);
      echo "Te ha faltado rellenar: ";
      echo implode(", ", $falta);
    }



  }else {
    pintaFormulario();
  }
  ?>
</body>
</html>
