<?php include_once("header.php"); ?>

<?php
  $nombre = "cookie1";

 setcookie($nombre, "", time()-1);
 echo "Se ha borrado la cookie";
 ?>

<?php include_once("footer.php"); ?>
