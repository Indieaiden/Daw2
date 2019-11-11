<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UnoDos</title>
    <meta name="author" content="Javieer Fernandez">
    <meta name="description" content="unodos">
  </head>
  <body>
    <?php
      if (isset($_POST["gotcha"])) {
        foreach ($_POST as $clave => $valor) {
          if (strlen("nombre_")<=1) {
            echo "<h2> Debe introducir un nombre </h2>";
          } else if (strlen("pwd_")>6) {
            echo "<h2> Contraseña conriene menos de 6 caracteres </h2>";
          } else {
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
          Usuario:<input type="text" name="nombre_" placeholder="Escribe aquí tu nombre"><br>
          Contrasenia: <input type="password" name="pwd_"><br><br>
          <input type="checkbox" name="gustos[]" value="Dulce">Dulce<br>
          <input type="checkbox" name="gustos[]" value="Salado">Salado<br>
          <input type="checkbox" name="gustos[]" value="Acido">Acido<br>
          <input type="checkbox" name="gustos[]" value="Amargo">Amargo<br><br>

          <input type="radio" name="sexo" value="hombre">Hombre<br>
          <input type="radio" name="sexo" value="mujer">Mujer<br>
          <input type="radio" name="sexo" value="no_esta_claro" checked="checked">Ns/nc<br><br>

          <select required="required">
            <option value="">-None-</option>
            <option value="Rojo">Rojo</option>
            <option value="Azul">Azul</option>
            <option value="Verde">Verde</option>
            <option value="Amarillo">Amarillo</option>
          </select ><br><br>
          <select multiple="multiple" name="tipocolor[]">
            <option  value="Claro">Claro</option>
            <option  value="Chillón">Chillon</option>
            <option  value="Oscuro">Oscura</option>
          </select><br>
          <button type="submit" name="gotcha">Enviar</button>
    <?php
      }
    ?>

  </body>
</html>
