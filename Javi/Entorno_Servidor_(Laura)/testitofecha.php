<?php

$f = time();

echo $f."<br>";

$fechactual = date ("d-m-Y",$f);

echo $fechactual."<br>";

$g = time()+(60*60*24*7);

echo $g."<br>";

$fechasemanasiguiente = date ("d-m-Y",$g);

echo $fechasemanasiguiente."<br>";

echo date("t/m/y H:i:s");
?>
