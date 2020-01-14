<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>transferencia</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>
  <?php
  // ------------------ transferencia.php --------
  session_start();
  if ( !isset( $_SESSION['permiso'] )){
    die();
  } else {
    echo '<form action="transfiere.php" method="POST">';
    echo ' Cantidad: <input type="text" id="id_c" name="c"/><br />';
    echo '<label for="id_destino">Destino:</label>';
    echo '<input type="text" id="id_d" name="d"/><br />';
    echo '<input type="submit" value="Enviar"/>';
    echo '</form>';
  }
  ?>
</body>
</html>
