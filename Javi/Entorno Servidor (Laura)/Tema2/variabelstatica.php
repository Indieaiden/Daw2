<?php
 function incremento(){
   static $x=0;
   $x++;
   echo $x."</br>";
 }
 incremento();
 incremento();
 incremento();
?>
