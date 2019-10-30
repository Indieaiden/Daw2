<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Ejercicios Extra PE </Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
	<!-- Ejercicio 12 
		Crea una página con una tabla con dos columnas de un tamaño fijo. Haz
		que cada vez que se recargue la página muestre dos colores diferentes.
		(Uso de una función random en php, y la función hsl() para css).
	-->
	<table>
		<tr>
			<th class="Color1"> Color 1 </th>
			<th class="Color2"> Color 2 </th>
		</tr>
		<?php
		$mat = rand(0,360);
		$satur = rand(0,100);
		$lum = rand(0,100);
		
		$mat2 = rand(0,360);
		$satur2 = rand(0,100);
		$lum2 = rand(0,100);
	echo"<tr>",
			"<td style=\"background-color:hsl($mat,$satur%,$lum%)\"> </td>",
			"<td style=\"background-color:hsl($mat2,$satur2%,$lum2%)\">  </td>",
		"</tr>",
	"</table> <br>";
		?>
		<?php
	//Ejercicio 13
	/*
	Modifica la página anterior para añadir en una tabla de una sola columna
	el código php que has empleado.
	*/
	echo"&lt;table&gt; <br>",
		"&lt;tr&gt; <br>",
			"&lt;th class=&quot;Color1&quot;&gt; Color 1 &lt;/th&gt; <br>",
			"&lt;th class=&quot;Color2&quot;&gt; Color 2 &lt;/th&gt; <br>",
		"&lt;/tr&gt; <br>",
		"&lt;?php <br>",
		"$mat = rand(0,360); <br>",
		"$satur = rand(0,100); <br>",
		"$lum = rand(0,100); <br>",
		"$mat2 = rand(0,360); <br>",
		"$satur2 = rand(0,100); <br>",
		"$lum2 = rand(0,100); <br>",
	"echo&quot;&lt;tr&gt;&quot;, <br>",
			"&quot;&lt;td style=\&quot;background-color:hsl($mat,$satur%,$lum%)\&quot;&gt; &lt;/td&gt;&quot;, <br>",
			"&quot;&lt;td style=\&quot;background-color:hsl($mat2,$satur2%,$lum2%)\&quot;&gt;  &lt;/td&gt;&quot;, <br>",
		"&quot;&lt;/tr&gt;&quot;, <br>",
	"&quot;&lt;/table&gt;&quot;; <br>",
		"?&gt;";
	//Ejercicio 14
	/*
	Crea las variables msg1, msg2, msg3 y msg4 con mensajes de texto.
	Obtén un número aleatorio del 1 al 4, accede y muestra el contenido de
	esa variable.
	*/
		$msg1='ka';
		$msg2='wa';
		$msg3='ii';
		$msg4='desune';
		$aleatorio = rand(1,4);
		$mensage = 'msg'.$aleatorio;
		echo $$mensage;
		echo '<br>';
		echo '<br>';
		
	//Ejercicio 15
	/*
	Almacene en un array los 10 primeros número pares. Imprímalos cada
	uno en una línea.
	*/
		for($i=2;$i<=20;$i=$i+2){
			$x[] = $i;
		}
		foreach($x as $mcet){
			echo $mcet.'<br>';
		}
		echo '<br>';
		echo '<br>';
	//Ejercicio 16
	/*
	Mostrar una tabla de 4 por 4 que muestre las primeras 4 potencias de
	los números del uno 1 al 4 (hacer una función que las calcule invocando
	la función pow). En PHP las funciones hay que definirlas antes de
	invocarlas.
	*/
		$resultado = 0;
		function winnie($tigger,$piglet){
			$de = pow($tigger,$piglet);
			return $de;
		}
		echo"<table>";
			for($i=1;$i <= 4; $i++){
				echo"<tr>";
				for($j=1;$j<=4;$j++){
					echo"<td>";
					$resultado = winnie($i,$j);
					echo"$resultado";
					echo"</td>";
				}
				echo"</tr>";
			}
		echo"<table>";
			/*<tr> 
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td>1</td>
			</tr>
			<tr> 
				<td>2</td>
				<td>4</td>
				<td>8</td>
				<td>16</td>
			</tr>
			<tr>  
				<td>3</td>
				<td>9</td>
				<td>27</td>
				<td>81</td>
			</tr>
			<tr>  
				<td>4</td>
				<td>16</td>
				<td>64</td>
				<td>256</td>
			</tr>*/
	//Ejercicio 17
	// buscar funiciones Opendir(),readdir(),closedir().
	/*
	17.Hacer un programa que muestre en una tabla de 4 columnas todas las
	imágenes de el directorio "fotos". Para ello consulte el manual (en
	concreto la referencia de funciones de directorios). Suponga que en el
	directorio sólo existen fotos y que ese directorio está en la misma
	carpeta que el php.
	*/
	?>
	<table>
		<th>Gatitos Kawaiis(y lobo edgy)</th>
		
	<?php
	$controlador = opendir("./fotos");
	$contador = 0;
	while (false !== ($entrada = readdir($controlador))){
		if(!is_dir ($entrada)){
			if($contador==0){
				echo"<tr>";
				}
				echo"<td>";
				echo"<img src='./fotos/$entrada' alt='gatito' height='150' width='150'>";
				echo"</td>";
				$contador++;
		
			if($contador==4){
			echo"</tr>";
			$contador = 0;
			}
		}
	}
	
	closedir($controlador);
	?>
	
	</table>
	</body>
</html>