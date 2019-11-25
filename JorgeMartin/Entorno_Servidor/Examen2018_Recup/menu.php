<?php
session_start();

    function addLog ($fp, $user, $option) {
          $time = time();
          //Salto de línea PHP_EOL DONE
          fwrite($fp, PHP_EOL);
          //Añadir USER y OPTION
          fwrite($fp, $user." -- ");
          fwrite($fp, $option." -- ");
          //Ponerle también la fecha DONE
          fwrite ($fp, date("d-M-Y (H:i:s)", $time));
    }

    function Menu() {
      ?>
    <h1>Buenos días, <?php echo $_SESSION['usuario']; ?></h1></br>
    <h3>Menú:</h3></br>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <input name ="Juego" type="submit" value="Juego"/></br>
      <?php if ($_SESSION['tipo'] == 1): ?>
        <input name ="Chat" type="submit" value="Chat"/></br>
      <?php endif; ?>
      <input name ="Salir" type="submit" value="Salir"/></br>
    </form>
    <?php
  }

if (!isset($_SESSION['usuario']) || !isset($_SESSION['tipo'])) {
  echo "Error de sesion";
}
else {
  $tipo = $_SESSION['tipo'];
  $user = $_SESSION['usuario'];
  
  if (isset($_POST['Juego'])) {
    //Trabajar con archivo log pa hacer cosis
    if (!$fp = fopen("log.log", "a")){
      echo "No se ha podido abrir el archivo log";
    }
    addLog($fp, $user, "Juego");
    fclose($fp);

		header('Location: juego.php');
  }

  if (isset($_POST['Chat'])) {
    //Trabajar con archivo log pa hacer cosis
    if (!$fp = fopen("log.log", "a")){
      echo "No se ha podido abrir el archivo log";
    }
    addLog($fp, $user, "Chat");
    fclose($fp);

    header('Location: chat.php');
  }

  if (isset($_POST['Salir'])) {
    //Trabajar con archivo log pa hacer cosis
    if (!$fp = fopen("log.log", "a")){
      echo "No se ha podido abrir el archivo log";
    }
    addLog($fp, $user, "Salir");
    fclose($fp);

    // Destruir todas las variables de sesión.
$_SESSION = array();
  // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
  // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
  }
  // Finalmente, destruir la sesión.
  session_destroy();
  header('Location: index.php');
  exit();
  }


  if ($tipo == 1 || $tipo==2) {
    //Es un usuario correcto
    Menu();
  }
  else {
    // No es ni admin ni user, error
    echo "Error de identificación";
  }
}

 ?>
