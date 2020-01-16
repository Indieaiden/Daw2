<h1>FECHAS</h1>

<?php

$f = time();
echo $f."<br>";
$fechactual = date ("d-m-Y",$f);
echo $fechactual."<br>";

$g = time()+(60*60*24*7);
echo $g."<br>";
$fechasemanasiguiente = date ("d-m-Y",$g);
echo $fechasemanasiguiente."<br>";

echo date("t/m/Y H:i:s");


?>
<h1>SLICE - SPLICE</h1>
<?php

$entrada = array("a", "b", "c", "d", "e");
shuffle($entrada);
$salida = array_slice($entrada, 2);
print_r($entrada);
echo "<br>";
foreach ($salida as $key => $value) {
  echo $value.", ";
}
$salida = array_splice($entrada, 2);//elimina los valores anteriores
echo "<br>";
foreach ($entrada as $key => $value) {
  echo $value.", ";
}

?>
