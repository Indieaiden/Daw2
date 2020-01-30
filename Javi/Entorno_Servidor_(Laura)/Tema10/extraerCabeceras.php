<?php
$x=apache_request_headers();
$y=apache_response_headers();//expose_php
echo "<h1>cabeceras Request</h1>";
foreach($x as $k=>$v)
echo "$k : $v <br>";

echo "<hr>";
foreach($y as $k=>$v)
echo "$k : $v <br>";
?>
