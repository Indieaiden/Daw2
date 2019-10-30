
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
				echo'Bien, el usuaro y la contraseña son correctos';
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
		?>
		<table>
			<tr>
				<td>
					Coche 3 5000
					<a href="./compra.php?articulo=coche">Comprar</a>
				</td>
			</tr>
			<tr>
				<td>
					casa  10 100000
					<a href="./compra.php?articulo=casa">Comprar</a>
				</td>
			</tr>
			<tr>
				<td>
					traje 5 500
					<a href="./compra.php?articulo=traje">Comprar</a>
				</td>
			</tr>
			<tr>
				<td>
					caña 5 350
					<a href="./compra.php?articulo=caña">Comprar</a>
				</td>
			</tr>
		</table>
		<?php
		
	}
	function mostrar_carrito(){
		foreach($_SESSION['carrito'] as $clave => $articulo){	
			echo'Hay '.$articulo .'de '.$clave.'<br>';
		}
	}
	?>
