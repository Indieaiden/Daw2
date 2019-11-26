<?php
session_start();
$f_expiracion=mktime(date("m")+1);//time()+(1*30*24*60*60);
if(isset($_GET['nombre'])&&isset($_GET['valor'])){
	$nombre=$_GET['nombre'];
	$valor=$_GET['valor'];
	
if(isset($_GET['Guardar'])){	

	if(isset($_COOKIE[$nombre])){
	
		$_COOKIE[$nombre]=$valor;	
	}else {setcookie($nombre,$valor,$f_expiracion);}

}
if(isset($_GET['Consultar'])){
	
	if(isset($_COOKIE[$nombre])){

		foreach($_COOKIE as $clave => $valor){
		if($clave==$nombre){
		 echo "nombre ".$clave." valor ".$valor;
		}
	}
	
}
}
}
f_cookie();
function f_cookie(){

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"><h1>Chat</h1>
<label for="id_nombre"><h1>Nombre:</h1></label>
<input type="text" name="nombre" id="id_nombre"/><br>
<label for="id_nombre"><h1>Valor:</h1></label>
<input type="text" name="valor" id="id_valor"/><br><br>
<input type="submit" value="Guardar cookie" name='Guardar'/>
<input type="submit" value="Consultar cookie" name='Consultar'/>
</form>
<?php
}
?>