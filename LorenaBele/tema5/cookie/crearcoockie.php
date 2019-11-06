<?php

$nombre = "nombre";
$valor=561;
$f_expiracion=time()+60;
//$f_expiracion=time()-1;para matar un cookie
$path=__DIR__;
if(setcookie($nombre,$valor,$f_expiracion,$path)){
	echo "ya esta";
}else{
	echo "no creada";
}
$nombre1 = "nom";
$valor2=56;
$f_expiracion3=time()+60;
//$f_expiracion=time()-1;para matar un cookie

if(setcookie($nombre1,$valor2,$f_expiracion3,$path,"localhost",true)){
	echo "<br> ya esta una cookie segura";
}else{
	echo "no creada";
}
?>