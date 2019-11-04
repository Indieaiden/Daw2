<?php include_once("header.php"); ?>

<?php if (!isset($_COOKIE["cookie1"])) {
  echo "No se ha encontrado la cookie";
}
  else {
    echo "La cookie es: ". $_COOKIE["cookie1"];
  }
 ?>

<?php include_once("footer.php"); ?>
