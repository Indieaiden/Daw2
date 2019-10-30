<?php
class coche{
	private $velocidad;
	private $color;
	private $propiedades = array();
	
	public function getVelocidad(){
			return $this->velocidad;
	}
	// public function setVelocidad($valorPropiedad){
		// this->velocidad = $valorPropiedad;
	// }
	public function setVelocidad($valor){
		if($valor <0 && $valor<=200){
			$this->velocidad = $valor;
		}
	}
	// public function __get($nombrePropiedad){
		
		// echo "Se está solicitando la propiedad $nombrPropiedad <br>";
		// if(!property_exists('coche', $nombrPropiedad)){
			// echo'La propiedad no existe';
			// return false;
		// }else{
			// return $this->$propiedades[$nombrePropiedad];
		// }
	// }
	public function __get($nombrePropiedad){
		
		echo "Se está solicitando la propiedad $nombrePropiedad <br>";
		$valorRetorno=null;
		switch ($nombrePropiedad){
			case 'velocidad':
			case 'color':
				$valorRetorno = $this->$nombrePropiedad;
				break;
			default:
				if(array_key_exists($nombrePropiedad, $this->propiedades)){
					$valorRetorno = $this->propiedades[$nombrePropiedad];
				}
		}	
		return $valorRetorno;
	}
	public function __set($nombrePropiedad ,$valorPropiedad){
		
		echo "Se está estableciendo la propiedad $nombrePropiedad".
			" con el valor $valorPropiedad <br>";
			switch ($nombrePropiedad){
				case 'velocidad':
					$this->velocidad = $valorPropiedad;
					break;
				case 'color':
					echo'El taller de chapa y pintura está roto <br>';
					break;
				default:
					$this->propiedades[$nombrePropiedad] = $valorPropiedad;
			}
	}
}
	//cuando intentas acceder a una propiedad privada sin get ni set o que no existe 
	//ser redireccionará a los metodos __get o __set y se hará loq ue tengan dentro
	$BananaRauda = new Coche();
	$BananaRauda->setVelocidad(0);
	$BananaRauda->velocidad=200;
	$BananaRauda->color="amarillo";
	$BananaRauda->puertas=5;
	
	$caca = $BananaRauda->color;
	echo"chajahcbjahgfha ".$BananaRauda->velocidad."skvjdahlajgshskhgl <br>";
	echo"chajahcbjahgfha ".$BananaRauda->puertas."skvjdahlajgshskhgl <br>";
	echo"chajahcbjahgfha ".$BananaRauda->dddd."skvjdahlajgshskhgl <br>";
	echo"<pre>";
		print_r($BananaRauda);
	echo"</pre>";
?>