
	<?php
	function comprobarSesion(){
		session_start();
		if(!isset($_SESSION['usuario'])){
			header("location: entrada.php");
		}
	}
	function validar($usuario,$clave){
		$bool = true;
		if(isset($usuario)){
			if($usuario == $clave){
				//echo'Bien, el usuaro y la contraseña son correctos';
				//$_SESSION['usuario']=$usuario;
			}
			else{
				$bool =False;
			}
		}
		return $bool;
	}	
	/*
	*/
	function articulos(){
		
		$coche = array('nombre' => 'coche',
		'cantidad' => 3,
		'precio' => 5000, 
		);
		$casa = array('nombre' => 'casa',
		'cantidad' => 2,
		'precio' => 1000000, 
		);
		$manga = array('nombre' => 'manga',
		'cantidad' => 50,
		'precio' => 12, 
		);
		//Crear un array, formatear para sacar la salida
		$productos = array('coche' => $coche,
		'casa' => $casa,
		'manga' => $manga,
	 	);

		?>
		<table>
			<?php 
				foreach ($productos as $nombre => $producto) {
					echo "<tr>";
					echo "<td>";
						foreach ($producto as $key => $value) {
						echo "<p> $key = $value </p>";
						}
						echo "<a href=\"./compra.php?articulo=".$producto['nombre']."\">Comprar</a>";
						echo "</td>";
					echo "</tr>";
				}
			?>
		</table>
		<?php
		
	}
	function mostrar_carrito(){
		foreach($_SESSION['carrito'] as $clave => $articulo){	
			echo'Hay '.$articulo .'de '.$clave.'<br>';
		}
	}
	?>