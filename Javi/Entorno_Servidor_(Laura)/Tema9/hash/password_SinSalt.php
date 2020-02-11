
<?php
class Password {
  const SALT = 'EstoEsUnSalt';
  public static function hash($password) {
    return password_hash($password, PASSWORD_DEFAULT, [10]);
  }
  public static function verify($password, $hash) {
    return password_verify($password, $hash);
  }
}
function filtrado($datos){
  $datos= trim($datos); //Elimina espacios antes y despues
  $datos= stripslashes($datos); //Elimina \ para que no te joda el codigo
  $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
  return $datos;
}
$usuarios=array(
  "laura" => Password::hash("1234"),
  "pepe" => Password::hash("nohay2sin3"),
  "lidia" => Password::hash("nohay2sin3")
);
echo "<pre>";
print_r($usuarios);
echo "</pre>";


if (isset($_GET['entrar'])) {
  $login=$_GET['usuario'];
  $clave=$_GET['clave'];
  if(array_key_exists($login, $usuarios)){
    if (Password::verify($clave,$usuarios[$login])) {
      echo "Contraseña correcta";
    }else{
      echo "Contraseña incorrecta";
    }
  }else{
    echo "El usuario no existe";
  }
}else{
  ?>
  <h2>Identificacion Usuario</h2>
  <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>Usuario: <input type="text" name="usuario"></p>
    <p>Clave: <input type="password" name="clave"></p>
    <input type="submit" name="entrar">
    <?php
    if (isset($error)) {
      foreach ($error as $errores) {
        echo "<li> $errores </li>";
      }
    }
  }
?>
