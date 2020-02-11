
<?php
class Password {
  public static function hash($pwd) {
    return password_hash($pwd, PASSWORD_DEFAULT, [10]);
  }
  public static function verify($pwd, $hash) {
    return password_verify($pwd, $hash);
  }
}
?>
