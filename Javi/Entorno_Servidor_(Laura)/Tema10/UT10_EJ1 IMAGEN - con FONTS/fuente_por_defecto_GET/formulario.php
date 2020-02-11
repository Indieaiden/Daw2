<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Texto imagenes</title>
</head>
<body>
  <?php
  $dir = "C:/xampp/htdocs/Daw2/Javi/Entorno_Servidor_(Laura)/Tema10/ImagenCabecera/Imagen_con_textos/Textos_fuentes_inclinacion/fonts/";
  $content = scandir($dir);

?>
  <h1>imagen con fuentes</h1>
  <h5>Texto</h5>
  <form class="formletra" action="imagen.php" method="get">
    <label for="texto">Texto a introducir: </label>
    <input type="text" id="texto" name="texto" placeholder="texto a mostrar"><br>
    <h5>Colores de texto</h5>
    <label for="red">Rojo del texto: </label>
    <input type="text" id="red" name="red" placeholder="1-100" size="3"><br>
    <label for="green">Verde del texto: </label>
    <input type="text" id="green" name="green" placeholder="1-100" size="3"><br>
    <label for="blue">Azul del texto: </label>
    <input type="text" id="blue" name="blue" placeholder="1-100" size="3"><br>
    <h5>Tipo de fuente</h5>
    <select name="fuente">
      <?php
      for ($i=2; $i < count($content); $i++) {
        ?>
        <option value="<?php echo $content[$i]; ?>"><?php echo $content[$i]; ?></option>
        <?php
      }
      ?>
    </select><br><br>
    <button type="submit" name="sendeado" value="enviado">Enviar</button>
  </form>
</body>
</html>
