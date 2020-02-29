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
      <label>Nivel: </label><br>
      <?php
        for ($i=1; $i < 6; $i++) {
      ?>  <input type="radio" name="nivel" value="<?php echo $i; ?>" <?php if($argumentos['nivel'] == $i || ($i ==1 && empty($argumentos['nivel']))){ echo 'checked="checked"';} ?>><?php echo $i; ?>
      <?php
        }
       ?><br>

      <select name="idioma">
        <?php
        $idiomasDisponibles = array("español","ingles");
        for ($j=0; $j < count($idiomasDisponibles); $j++) {
          ?>
          <option value=<?php echo $idiomasDisponibles[$j]; ?> <?php if($argumentos['idioma'] == $idiomasDisponibles[$j]) { echo 'selected';} ?>><?php echo ucfirst($idiomasDisponibles[$j]); ?> </option>
          <?php
          // code...
        }
         ?>
      </select> <br>

      <input type="submit" name="enviado" value="enviado">
    </form>
    <br>

    <?php
  }








  if(isset($_POST['enviado'])){

    $validado = true;

    if(strlen($_POST["nombre1"])>30){
      echo "El nombre no puede tener mas de 30 caracteres <br>";
      $validado = false;
    }
    if (!empty($_POST["nombre1"])) {
        $fichero = @fopen("usuarios.txt","r") or die("No se ha podido encontrar el fichero");
        $flinea =fgets($fichero);
        $usuarios=explode('|', trim($flinea));
          if (!in_array($_POST["nombre1"],$usuarios)) {
            $validado=false;
            echo "El nombre de usaurio no existe<br>";
          }
    }

    if($validado){
              $nombre = filtrado($_POST["nombre1"]);
              $dificultad=$_POST['nivel'];
              $idioma=$_POST['idioma'];
              setcookie("nombre",$nombre,time()+60,__DIR__);
              setcookie("nivel",$dificultad,time()+60,__DIR__);
              setcookie("idioma",$idioma,time()+60,__DIR__);
              header("Location: inicio.php");
    }



  }else {
    pintaFormulario();
  }
  ?>
</body>
</html>
