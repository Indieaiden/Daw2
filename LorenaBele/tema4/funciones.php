<?php
include 'C:\xampp\htdocs\tema2\bloque2\header.php';
//ejercicio2
function par_impar (){
	$numero= func_num_args();
	for($i=0;$i<$numero;++$i){
		if(func_get_arg($i) %2==0){	
			echo func_get_arg($i) . ' es par ';
		}else{
		
			echo  func_get_arg($i). ' es impar ';
		}
	}
}
par_impar(1,2,3);

//ejercicio 3

function incremento(&$numero){
	++$numero;
}

$numero=5;
echo $numero."<br/>";
incremento($numero);
echo $numero."<br/>";

//ejercicio4

function estilo($letra,$r="0",$g="0",$b="0"){
	
	static $l=0;
	if(($letra =="fondo")){
	echo
	 "<style>
		.t{$l}{color:rgb(255, 255, 0);background:rgb($r,$g,$b);}		
		</style>
		";
	}else{
		echo
		 "<style>
		.t{$l}{color:rgb($r,$g,$b);background:rgb(255, 255, 0);}		
		</style>
		";
	}
	return $l++;

}
$clase=estilo("fondo");	
echo"<table class =\"t{$clase}\">";
for($i=1;$i<=4;++$i){	
	echo "<tr>";
	for($j=1;$j<=2;++$j){	
	echo"<td>Hola</td>";
	}
	echo "</tr>";
}
	echo "</table>";
	echo "<br/>";

	
$clase=estilo("letra");	
echo"<table class =\"t{$clase}\">";
for($i=1;$i<=4;++$i){	
	echo "<tr>";
	for($j=1;$j<=2;++$j){	
	echo"<td>Hola</td>";
	}
	echo "</tr>";
}
	echo "</table>";
	echo "<br/>";


	include 'C:\xampp\htdocs\tema2\bloque2\footer.php';
?>