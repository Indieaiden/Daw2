<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar</title>
    <meta name="author" content="Javier Fernandez">
    <meta name="description" content="Porgramita tabla de multiplicar">
    <style>
      body{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <form class="fomr" action="procesatabla.php" method="post">
      <label for="desdenumero">Desde que numero contamos:</label>
      <input type="text" name="numero_desde" value=0 id="desdenumero"><br>
      <label for="hstanumero">Hasta que numero contamos</label>
      <input type="text" name="numero_hasta" value=1 id="hastanumero"><br>
      <input type="submit" value="Ver tabla">
    </form>
  </body>
</html>
