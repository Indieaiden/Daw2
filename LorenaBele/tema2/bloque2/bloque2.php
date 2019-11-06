
<?php
include './header.php';
$color1=rand(1,300);
$color2=rand(100,300);
echo "<style>
		.t{background-color :hsl($color1,100%,50%);border-style:inset;}
		.t2{background-color :hsl($color2,100%,50%);border-style:inset;}
		</style>
		";
echo"<table>";

for ($i=1;$i<=4;++$i){	
	echo "<tr>";
	for($j=1;$j<=2;++$j){
		if(($i+$j)%2==0){
			echo'<td class ="t">Hola</td>';
		}else{
			echo'<td  class ="t2">Hola</td>';
		}
	}
	echo "</tr>";
}
	echo "</table>";

?>
