<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UnoDosTres</title>
    <meta name="author" content="Javier Fernandez">
    <meta name="description" content="unodostres">
  </head>
  <body>
    <?php
      if (isset($_POST["gotcha"])) {
        foreach ($_POST as $clave => $valor) {
          if (empty($_POST[$clave])) {
            echo "el campo ".$clave." está vacio<br>";
          } else{
            if (is_array($_POST[$clave])) {
              foreach ($_POST[$clave] as $clavedos => $valordos) {
                echo $clavedos." => ".$valordos.", ";
              }
            }else {
              echo $clave." => ".$valor;
            }
            echo "<br>";
          }
        }
      }else {
      ?>
        <form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
          <h4>Datos de usuario</h4>
          Usuario:<input type="text" name="nombre_" placeholder="Escribe aquí tu nombre"><br>
          Contrasenia: <input type="password" name="pwd_">
          <h4>Sexo:</h4>
          <input type="radio" name="sexo" value="hombre">Hombre<br>
          <input type="radio" name="sexo" value="mujer">Mujer<br>
          <input type="radio" name="sexo" value="no_esta_claro" checked="checked">Ns/nc
          <h4>Que tipo de sabores te gustan</h4>
          <input type="checkbox" name="gustos[]" value="Dulce">Dulce
          <input type="checkbox" name="gustos[]" value="Salado">Salado<br>
          <input type="checkbox" name="gustos[]" value="Acido">Acido
          <input type="checkbox" name="gustos[]" value="Amargo">Amargo<br>
          <h4>Colores y estilos</h4>
          <select required="required">
            <option value="">-None-</option>
            <option value="Rojo">Rojo</option>
            <option value="Azul">Azul</option>
            <option value="Verde">Verde</option>
            <option value="Amarillo">Amarillo</option>
          </select ><br><br>
          <select multiple="multiple" name="tipocolor[]">
            <option value="Claro">Claro</option>
            <option value="Chillón">Chillon</option>
            <option value="Pastel">Pastel</option>
            <option value="Oscuro">Oscura</option>
          </select>
          <br><br>
          <button type="submit" name="gotcha" value="enviado">Enviar</button>
    <?php
      }
    ?>
  </body>
</html>
