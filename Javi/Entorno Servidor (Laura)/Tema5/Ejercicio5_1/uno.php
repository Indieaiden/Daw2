<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario 5 opciones</title>
    <meta name="author" content="Javier Fernandez">
    <meta name="description" content="Formulario texto">
  </head>
  <body>
    <form action="dos.php" method="post">
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

    </form>
  </body>
</html>
