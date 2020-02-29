<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>REGISTRO DE EVENTOS</title>
    <style>
      span.aviso{
        color:red;
      }
      span.ok{
        color:blue;
      }
    </style>
  </head>
  <body>
    <?php

    include_once("conexion.php");
    $con= Conexion::singleton();

    function pintaFormulario() {
      //Comprueba si hay arumentos para luego escribirlos
      $argumentos = 0;
      if(func_num_args() > 0) {
        $argumentos = func_get_arg(0);
      }
      //pinta la tabla
      ?>
      <h3>Registro de eventos</h3>
      <form action='<?php echo $_SERVER["PHP_SELF"];?>' method="POST"><!--formulario-->
        <label for="login">Login: </label>
        <input type="text" id="login" name="login" <?php if(isset($argumentos['login'])) {echo "value = " . Filtrado::filtrado($argumentos['login']);} ?>> <br>
        <label for="pwd">Contraseña: </label>
        <input type="password" id="pwd" name="pwd"> <br>
        <label for="nevento">Nombre de evento: </label>
        <input type="text" id="nevento" name="nevento" <?php if(isset($argumentos['nevento'])) {echo "value = " . Filtrado::filtrado($argumentos['nevento']);} ?>> <br>
        <label for="desc">Descripcion: </label>
        <input type="text" id="desc" name="desc" <?php if(isset($argumentos['desc'])) {echo "value = " . Filtrado::filtrado($argumentos['desc']);} ?>> <br>
        <label for="lugar">Lugar: </label>
        <input type="text" id="lugar" name="lugar" <?php if(isset($argumentos['lugar'])) {echo "value = " . Filtrado::filtrado($argumentos['lugar']);} ?>> <br>
        <label for="fecha">Fecha Valided: </label>
        <input type="date" id="fecha" name="fecha" placeholder="dd/mm/aaaa"<?php if(isset($argumentos['fecha'])) {echo "value = " . Filtrado::filtrado($argumentos['fecha']);} ?>> <br>
        <label for="hora">Hora del evento: </label>
        <input type="time" id="hora" name="hora" placeholder=" --:-- " <?php if(isset($argumentos['hora'])) {echo "value = " . Filtrado::filtrado($argumentos['hora']);} ?>> <br>

        <input type="submit" name="alta" value="alta">

      </form>
      <br>
      <?php
    }
    if(isset($_POST['alta'])){

      $falta = array();
      $validado = true;
      //---------Compribacion de los datos que stán sin rellenar para su posterior uso
      foreach($_POST as $clave => $valor) {//validamos los valores introducidos en el formulario con un foreach
        if(empty($_POST[$clave])){
          array_push($falta, $clave);//si esta vacio añadimos a un array el campo y el valor
          $validado = false;//valor false para la comprobacion final
        }
      }
      if (!empty($_POST['login']) || !empty($_POST['pwd'])) {
        $usuen = Filtrado::filtrado($_POST['login']);//usario filtrado
        $contra = Password::hash($_POST['pwd']);//contraseña hasheada
        $requ = $con->consultarDatosAcceso($usuen,$contra);//consulta login y clave de la tabla acceso

        //print_r($requ);
        //-------------comprobar usuarios
        if (count($requ)!=1) {
          echo '<span class="aviso">Usuario no valido</span><br>';//aviso usr no valido
          $validado = false;
        }else if (!(Password::verify($_POST['pwd'],$requ[0]['clave']))) {
          echo '<span class="aviso">contraseña no valida</span><br>';//aviso  pwd no valido
          $validado = false;
        }
        //---------------comprobar otro evento existente (nevento, desc, lugar, fecha,hora)
        $nombreev= Filtrado::filtrado($_POST['nevento']);//nombre del evento filtrado
        $fechaev = $_POST['fecha'];//fecha  aaaa-mm-dd
        $horaev = $_POST['hora'];//hora hh:mm
        $descev = Filtrado::filtrado($_POST['desc']);//descripcion filtrada
        $lugarev = Filtrado::filtrado($_POST['lugar']);//lugar filtrado
        //curdate curtime
        $fechaAhora = date("Y/m/t");//fecha actual aaaa/mm/dd
        $horaAhora = date("H:i");//hora actual hh:mm
        //-------comprobacion fecha y hora
        if ($fechaev < $fechaAhora) {//comprueba si la fecha del evento y la hora son anteriores a la fecha actual
          echo '<span class="aviso">La fecha no puede ser anterior a la actual</span><br>';//aviso  fecha no valido
          $validado = false;
        }else if ($horaev <= $horaAhora) {
          echo '<span class="aviso">La fecha debe de ser posterior a la actual</span><br>';//aviso de la hora no valido
          $validado = false;
        }
        //------ comprobacion primer digito numerico
        if (is_numeric(substr($nombreev,0,1))) {//si empieza por numero
          echo '<span class="aviso">El nombre del evento no puede empezar por un numero</span><br>';//aviso nombre del evento no valido no valido
          $validado = false;
        }
        //------------comprobacion si existe evento con igual fecha y hora
        $req2= $con->consultarDatosEvento($fechaev,$horaev);//consulta fecha y hora de la tabla evento
        if (count($req2)==1) {
          echo '<span class="aviso">Ya existe un evento con la fecha y hora que has introducido </span><br>';
          $validado = false;
        }
      }

      if($validado){
        //insertar datos $login,$nombre,$desc,$fecha,$hora,$lugar
        $con ->introducirDatosEvento($usuen,$nombreev,$descev,$fechaev,$horaev,$lugarev);
        echo '<span class="ok">EVENTO REGISTRADO SATISFACTORIAMENTE</span>';
      }else {//aviso de que algo está ssin rellenar
        echo '<span class="aviso">';
        echo 'Te ha faltado rellenar: ';
        echo implode(", ", $falta);
        echo '</span>';
        pintaFormulario($_POST);
      }
    }else {
      pintaFormulario();
    }

    ?>

  </body>
</html>
