<?php
include '../Include/header.php';
include 'Loteria.php';
session_start();
function form(){
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><h1>Bienvenido a la p&aacute;gina de la Loter&iacute;a. Suerte!</h1><br>
<label for="id_n1">Numero 1:</label>
<input type="text" <?php if(isset($_POST["n1"])){ echo "value=\"$_POST[n1]\"";}if(isset($_GET["n1"])){ echo "value=\"$_GET[n1]\"";} ?> size="1" name="n1" id="id_n1"/><br>
<label for="id_n2">Numero 2:</label>
<input type="text" <?php if(isset($_POST["n2"])){ echo "value=\"$_POST[n2]\"";}if(isset($_GET["n2"])){ echo "value=\"$_GET[n2]\"";} ?> size="1" name="n2" id="id_n2"/><br>
<label for="id_n3">Numero 3:</label>
<input type="text" <?php if(isset($_POST["n3"])){ echo "value=\"$_POST[n3]\"";}if(isset($_GET["n3"])){ echo "value=\"$_GET[n3]\"";} ?> size="1" name="n3" id="id_n3"/><br>
<label for="id_n4">Numero 4:</label>
<input type="text" <?php if(isset($_POST["n4"])){ echo "value=\"$_POST[n4]\"";}if(isset($_GET["n4"])){ echo "value=\"$_GET[n4]\"";} ?> size="1" name="n4" id="id_n4"/><br>
<label for="id_n5">Numero 5:</label>
<input type="text" <?php if(isset($_POST["n5"])){ echo "value=\"$_POST[n5]\"";}if(isset($_GET["n5"])){ echo "value=\"$_GET[n5]\"";} ?> size="1" name="n5" id="id_n5"/><br>
<label for="id_nc">Numero Complementario:</label>
<input type="text" <?php if(isset($_POST["nc"])){ echo "value=\"$_POST[nc]\"";}if(isset($_GET["nc"])){ echo "value=\"$_GET[nc]\"";} ?> size="1" name="nc" id="id_nc"/><br>
<label for="id_nr">Reintegro:</label>
<input type="text" <?php if(isset($_POST["nr"])){ echo "value=\"$_POST[nr]\"";}if(isset($_GET["nr"])){ echo "value=\"$_GET[nr]\"";} ?> size="1" name="nr" id="id_nr"/><br><br>
<input type="submit" value="Generar combinacion" name='generar'/>
<input type="submit" value="Comprobar" name='comprobar'/>
</form>


<?php

	if(isset($_POST["generar"])){
		echo "<br>";
		$loteria= new Loteria(12,11,2019);
		$loteria -> imprime();
		$_SESSION["lote"]=serialize($loteria);
	}
}

	if(isset($_POST["comprobar"])){
		form();
		$loteria= unserialize($_SESSION["lote"]);
		$err_num=false;
		$err_comp=false;
		$err_reint=false;
		$errores=array();
		$texto;
		if(isset($_POST["n1"]) && !empty($_POST["n1"]) && $_POST["n1"]>0 && $_POST["n1"]<50 ){
			$n1=$_POST["n1"];
		}else{
			$n1="";
			$err_num=true;
		}
		
		if(isset($_POST["n2"]) && !empty($_POST["n2"]) && $_POST["n2"]>0 && $_POST["n2"]<50){
			$n2=$_POST["n2"];
		}else{
			$n2="";
			$err_num=true;
		}
		
		if(isset($_POST["n3"]) && !empty($_POST["n3"]) && $_POST["n3"]>0 && $_POST["n3"]<50){
			$n3=$_POST["n3"];
		}else{
			$n3="";
			$err_num=true;
		}
		
		if(isset($_POST["n4"]) && !empty($_POST["n4"]) && $_POST["n4"]>0 && $_POST["n4"]<50){
			$n4=$_POST["n4"];
		}else{
			$n4="";
			$err_num=true;
		}
		
		if(isset($_POST["n5"]) && !empty($_POST["n5"]) && $_POST["n5"]>0 && $_POST["n5"]<50){
			$n5=$_POST["n5"];
		}else{
			$n5="";
			$err_num=true;
		}
		
		if(isset($_POST["nc"]) && !empty($_POST["nc"]) && $_POST["nc"]>0 && $_POST["nc"]<50){
			$nc=$_POST["nc"];
		}else{
			$nc="";
			$err_num=true;
		}
		
		if(isset($_POST["nr"]) && !empty($_POST["nr"]) && $_POST["nr"]>0 && $_POST["nr"]<10){
			$nr=$_POST["nr"];
		}else{
			$nr="";
			$err_reint=true;
		}
		
		if($err_num || $err_reint){
			if($err_num){
				array_push($errores, "Los números deben tener un valor entre 1 y 49");
			}
			if($err_reint){
				array_push($errores, "El reintegro debe tener un valor entre 1 y 9");
			}
			echo "<br>".implode(". ",$errores);
			echo "<br><a href=\"formu.php?n1=$n1&n2=$n2&n3=$n3&n4=$n4&n5=$n5&nc=$nc&nr=$nr\">Click aquí</a> para volver al formulario";
		}else{
			echo "<br>";
			$loteria-> imprime();
			echo "<br><br><b>PREMIO: </b>".$loteria -> premio(25000,$n1,$n2,$n3,$n4,$n5,$nc,$nr);
		} 
		
}else{
	form();
}
include '../Include/footer.php';
?>