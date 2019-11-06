<?php

$msg1="hola";
$msg2="mundo";
$msg3="hay";
$msg4="gente";

$variable=mt_rand(1,4);
$comova="msg$variable";
echo $$comova;

?>