<?php
class Cadena{
	private $texto = "";
	private $metodosPermitidos = array("strtoupper","str_repeat","crypt");
	
	public function getTexto(){
			return $this->texto;
	}
	public function setTexto($valor){
		$this->texto = $valor;
	}
	
	public function __call($nombreMetodo,$argumentos){
		$aux = null;
		
		array_unshift($argumentos, $this->texto);
		
		// echo "Se está invocando $nombreMetodo, con los argumentos".implode(",", $argumentos)."<br>";
		if(in_array($nombreMetodo, $this->metodosPermitidos)){
			//call_user_func_array busca una funcion por nombre en php y a ejecuta con los argumentos que  le pases;
			// en este caso el resultado de hacer la funcion se guarda en una variable llamada aux
			$aux = call_user_func_array($nombreMetodo,$argumentos);
		}else{
			die("El metodo $nombreMetodo no existe");
		}
		return $aux;
		// return call_user_func($nombreMetodo, ",",$argumentos));
	}
}

// ser llama a la funcion magica __call siempre que se llame a un metodo 
// que no exista o que sea invisible desde fuera
//programa
$c = new Cadena;
$c->setTexto("Hello-World");
$nuevo_texto = $c->str_split();
echo "EL texto obtenido son split es";
print_r($nuevo_texto);
echo '<br>';
//metodos que existen.
echo $c->strtoupper().'<br>';
echo $c-> str_repeat(3).'<br>';
echo $c-> crypt(1).'<br>';
//metodos que no existen.
echo $c-> strlen();
echo '<pre>';
print_r($c);
echo '</pre>';
?>