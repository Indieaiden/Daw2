<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>horoscopo</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>
  <?php
  //-------- horoscopo.php --------
  echo '<form action="transfiere.php" method="POST">';
  echo '<input type="hidden" name="c" value="6000"/><br />';
  echo '<input type="hidden" name="d" value="mi_cta"/><br />';
  echo 'Conozca su horóscopo<br />';
  echo 'Escriba su signo : <input type="text" name="" value=""/>';
  echo '<input type="submit" value="Enviar"/>';
  echo '</form>';
  ?>
</body>
</html>
