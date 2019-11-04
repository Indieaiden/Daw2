<?php include_once "header.php" ?>
  <?php
  foreach ($_SERVER as $key=>$value){
     print "\$_SERVER[\"$key\"] == $value<br/>";
  }
  ?>
<?php include_once "footer.php" ?>
