<?php
require("./header.php");
?>

<?php 
	$c = get_defined_constants();

	foreach ($c as $key => $v) {
	echo $key . " => " . $v . " <br>";
	}
?>	

<?php
include("footer.php");
?>