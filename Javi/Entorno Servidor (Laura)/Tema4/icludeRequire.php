<?php
include("./header.php");
?>
<?php phpinfo(); ?>
<?php
include("footer.php");
?>
<?php
$incluuu = get_included_files();
foreach ($incluuu as $calve => $valor) {
  echo ($calve.", ".$valor."<br>");
}
?>
