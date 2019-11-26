<?php
  session_start();
  $fecha = mktime(date(m)+1);

  if ( !isset( $_SESSION['usuario'] )){ // No está acreditado
    echo "FUERA";
  }
  else {
//Primero guardamos esto en unas variables para que sea
//más fácil luego
  if(isset($_REQUEST['nombre']) && isset($_REQUEST['valor'])){
      $nombre = $_REQUEST['nombre'];
      $valor = $_REQUEST['valor'];

      if(isset($_REQUEST['Guardar'])){

          if(isset($_COOKIE[$nombre])){
            $_COOKIE[$nombre] = $valor;
          }
          else {
            setcookie($nombre, $valor, $fecha);
          }
      }

      if(isset($_REQUEST['Consultar'])){
        if(isset($_COOKIE[$nombre])){
          echo "Nombre: ".$nombre." Valor: ".$valor;
        }
        else {
          echo "La cookie no existe";
        }
      }

  }
}

 ?>
