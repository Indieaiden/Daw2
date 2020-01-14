<?php
  $msg1 = "Pavel </br>";
  $msg2 = "No </br>";
  $msg3 = "Sabe </br>";
  $msg4 = "Leer </br>";

  $num = Rand(1,4);
  $menss = 'msg'.$num;

  echo $$menss;
  //$ = msg.$num;
?>
