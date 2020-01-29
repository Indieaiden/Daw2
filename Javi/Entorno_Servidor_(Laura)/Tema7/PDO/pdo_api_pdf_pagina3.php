<?php
$conn = new PDO($dsn='mysql:host=localhost;dbname=test;charset=utf8',$usuario='javier',$pass='Nohay2sin3');
$attributes = array("AUTOCOMMIT","ERRMODE","CASE","CLIENT_VERSION","CONNECTION_STATUS","ORACLE_NULLS","PERSISTENT","PREFETCH","SERVER_INFO","SERVER_VERSION","TIMEOUT");
foreach ($attributes as $val) {
  echo "PDO::ATTR_$val: ";
  echo $conn->getAttribute(constant("PDO::ATTR_$val"));
  echo "\n";
}

 ?>
