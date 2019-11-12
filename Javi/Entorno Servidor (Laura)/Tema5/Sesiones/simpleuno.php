<form class="" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
  <input type="text" name="usuario" value="">
  <?php

  // Comiendo de la sesión
  if (isset($_POST["go"])) {
    session_start();
    // Guardar datos de sesión
    $_SESSION["usuario"] = $_POST["usuario"];
    header("Location: segundo.php");
  }
  ?>
<button type="submit" name="go">GO</button>
</form>
