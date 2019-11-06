<?php

if(isset($_COOKIE["nombre"])){

	foreach($_COOKIE as $clave => $valor){
	
		//echo "nombre ".$clave." valor ".$valor;

?>
<script>
function leerCookie(nombre){
	if(document.cookie.length==0)return null;
	var trozo1 =new RegExp("; ","g");
	var trozo2 =new RegExp("=","g");
	var listaCookie=document.cookie.split(trozo1);
	for(var i=0;i<listaCookie.length;i++){
		var cookie=listaCookie[i].split(trozo2);
		if(cookie[0]==nombre){
		return cookie[0]+cookie[1];
		document.write("h");
		}
	}return null;
}
document.write(leerCookie(<?php echo "\"$clave\"" ?>));
</script>
<?php
	}
}else{
	echo "no existe"; 
}
?>