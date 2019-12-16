<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
  function comprobar()
  {
//     $comprobaciones =  array(
//     "nombre_longitud" => false,
//     "nombre_caract" => false,
//     "psswd_longitud" => false,
//     "psswd_caract" => false
// );
    //El nombre tiene mas de seis caracteres
    $nombre = $_POST['nombre'];
    if (strlen($nombre)>=6){
      // $comprobaciones["nombre_longitud"] = true;
    }
    else {
      echo "<p>El nombre de usuario tiene que tener más de seis caracteres</p>";
    } //No tiene que tener caracteres raros solo letras numeros y _
    if (!encontrarCE($nombre)) {
      // $comprobaciones["nombre_caract"] = true;
    }
    else {
      echo "<p>El nombre solo puede tener letras, numeros y _</p>";
    }

    $contrasenia = $_POST['psswd'];
    //La contraseña tiene mas de diez caracteres
    if (strlen($contrasenia)>=10){
      // $comprobaciones["psswd_longitud"] = true;
    }
    else {
      echo "<p>La contraseña tiene que tener mas de 10 caracteres</p>";
    }
    //La contraseña tiene que tener mayus y minus y simbolo especial
    if (validarContrasenia($contrasenia)){
      // $comprobaciones["psswd_caract"] = true;
    }
    else {
      echo "<p>La contraseña tiene que tener mayus, minus y un caracter especial</p>";
    }
    return true;
  }

  function encontrarCE($string) {
    $flag = false;
    $array = str_split($string);
    foreach ($array as $char) {
      $nochar = ord($char);
      if ($nochar >= 48 && $nochar <= 57) {
        //numerosOK
      }
      else if($nochar >= 65 && $nochar <= 90) {
        //MayusculasOK
      } elseif ($nochar >= 97 && $nochar <= 122) {
        // minusculasOK
      } elseif ($nochar==95) {
        // _ ok
      } else {
        $flag = true;
      }
    }
    return $flag;
  }

  function validarContrasenia($string) {
    $mayus = false;
    $minus = false;
    $caract = false;

    $array = str_split($string);
    foreach ($array as $char) {
      $nochar = ord($char);
      if($nochar >= 65 && $nochar <= 90) {
        //MayusculasOK
        $mayus = true;
      } elseif ($nochar >= 97 && $nochar <= 122) {
        // minusculasOK
        $minus = true;
      } elseif (encontrarCE($string)) {
        // algun caracter raro
        $caract = true;
      } else {}
    }

    if ($mayus == true && $minus ==true && $caract ==true ) {
      //Si hay las tres cosas, se devuelve true
      return true;
    } else {
      // si falta alguna, return false
      return false;
    }
  }


  // --------------------MAIN---------------------------
  //Si el formulario se envía por primera vez, entonces comprobamos, si
  //lo que se hace es dar "volver a jugar, entonces no comprobamos"

  //comprobacion
   if (comprobar()) {
    imprimirSuperloto();
   } else {
    comprobar();
   }

  /*
  Se presentarán 6 números obtenidos aleatoriamente en el rango de 1 a 49 (ambos inclusives); Los 5 primeros
forman la jugada ganadora y deberan presentarse ordenados de menor a mayor; el sexto es el número
complementario
Por supuesto los números no pueden repetirse.
También presentará un enlace al propio programa para generar nuevas lotos ganadoras
*/
  function imprimirSuperloto()
  {
    //Son dinamicos
    $numeros = array(0 => 0,
    1 => 0,
    2 => 0,
    3 => 0,
    4 => 0,);
    $complementario = rand(1,9);
    $flag = true;
    $contador=0;

    while ($flag) {
      $auxiliar =  rand(1,49);
      //Hacerlo con in array mas eficiente
      foreach ($numeros as $num) {
        // echo $num;
        // echo " -- ";
        // echo $auxiliar;
        // echo " --?¿ ";
        // echo $contador;
        // echo "</br>";

        if ($auxiliar == $num) {
          // Si el auxiliar es igual a algun numero
          //ponemos el auxiliar a un valor (0) bandera
          $auxiliar = 0;
        } else {
          //No hacemos na
        }
      }

      if ($auxiliar == 0) {
        //Nada, siguiente repeticion
      } else {
        $numeros[$contador] = $auxiliar;
        $contador++;
      }

      if ($contador == 5) {
        $flag = false;
      }
    }

    sort($numeros);
    // CodigoHTML
 ?>
 <p style="text-align:center"> Enhorabuena usuario <?php echo $_REQUEST['nombre'] ?> </p> <br>
 <p>Su loto ganadora es: </p><br>
 <!-- El CSS está aquí pero no me apetece cambiarlo a otro sitio -->
 <style type="text/css">
 .tg  {border-collapse:collapse;border-spacing:0;}
 .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
 .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
 .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
 .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
 </style>
 <table class="tg">
   <tr>
     <th class="tg-lboi" colspan="5">Numeros</th>
     <th class="tg-0pky">Complementario</th>
   </tr>
   <tr>
     <td class="tg-0pky"><?php echo $numeros[0]; ?></td>
     <td class="tg-0pky"><?php echo $numeros[1]; ?></td>
     <td class="tg-0pky"><?php echo $numeros[2]; ?></td>
     <td class="tg-0pky"><?php echo $numeros[3]; ?></td>
     <td class="tg-0pky"><?php echo $numeros[4]; ?></td>
     <td class="tg-0pky"><?php echo $complementario; ?></td>
   </tr>
 </table> <br><br>
 <a href=<?php echo $_SERVER['PHP_SELF'];
 //Hay que ponerle el ? =  ?>> Volver a jugar </a>
 <?php } ?>

</body>
</html>
