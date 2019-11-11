<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>transfiere</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>
  <?php
  // ------------------ transfiere.php --------
  session_start();
  if ( !isset( $_SESSION['permiso'] )){
    die();
  }
  $cantidad=$_POST['c'];
  $destino=$_POST['d'];
  echo "Enviados ".$cantidad." a ".$destino;
?>
</body>
</html>
