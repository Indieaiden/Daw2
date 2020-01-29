
<?php
class Password {
  const SALT = 'EstoEsUnSalt';
  public static function hash($password) {
    return hash('sha512', self::SALT . $password);
  }
  public static function verify($password, $hash) {
    return ($hash == self::hash($password));
  }
}
$users = array(
  "pepe"=>Password::hash("1234"),
  "luis"=>Password::hash("HeyListen"),
  "maria"=>Password::hash("Juana"),
  "Maca"=>Password::hash("rena44y")
);
if (isset($_GET["user"])&&isset($_GET["pwd"])) {
  
  // code...
}





?>
