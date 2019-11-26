<?php
class Loteria{
	public $sorteo= array();
	public $complementario;
	public $reintegro;
	public $fecha_sorteo;
	
	const CINCO=50;
	const CUATRO_COMPLEMENTARIO=41;
	const CUATRO=40;
	const TRES_COMPLEMENTARIO=30;
	const TRES=30;
	const NO_SORTEADO=-1;
	const CERO=0;
	
	function __construct($dia,$mes,$anio){
		$cad_fecha=$dia."-".$mes."-".$anio;
		$fecha;
		$this -> generarCombinacion();
		$fecha= strtotime($cad_fecha);
		$this -> fecha_sorteo = $fecha;
	}
	function imprime(){
		echo "Números: ";
		echo implode(", ", $this->sorteo);
		
		echo "<br> Número complementario: ".$this->complementario;
		echo "<br> Reintegro: ".$this->reintegro;
	}
	function generarCombinacion(){
		$numSorteo=array();
		$num;
		/*SORTEO*/
		while(sizeof($numSorteo) < 5){
			do{
				$num= mt_rand(1,49);
			}while(in_array($num, $numSorteo));
			array_push($numSorteo, $num);
		}
		
		$this-> sorteo = $numSorteo;
		
		/*COMPLEMENTARIO*/
		do{
			$num= mt_rand(1,49);
		}while(in_array($num, $numSorteo));
		
		$this-> complementario= $num;
		
		/*REINTEGRO*/
		
		$num= mt_rand(1,9);
		$this -> reintegro = $num;
	}
	
	function comprobarCombinacion($n1,$n2,$n3,$n4,$n5,$nc){
		$numeros=array($n1,$n2,$n3,$n4,$n5);
		$nums=0;
		$comp=0;
		$rein=0;
		$prem=false;
		
		foreach($numeros as $clave=>$valor){
			if(in_array($valor, $this->sorteo)){
				$nums++;
			}
		}
		if($nc===$this->complementario){
			$comp=1;
		}
		if(strtotime(date("d-m-Y"))<$this->fecha_sorteo){
			$prem=self::NO_SORTEADO;
		}else{
			switch($nums){
				case 0:
					$prem=self::CERO;
					break;
				case 3:
					if($comp===0){
						$prem=self::TRES;
					}else{
						$prem=self::TRES_COMPLEMENTARIO;
					}
					break;
				case 4:
					if($comp===0){
						$prem=self::CUATRO;
					}else{
						$prem=self::CUATRO_COMPLEMENTARIO;
					}
					break;
				case 5:
					$prem=self::CINCO;
					break;
		}
		}
		
		return $prem;
	}
	
	function comprobarReintegro($r){
		$reinteg=false;
		if($r===$this->reintegro){
			$reinteg=true;
		}
		
		return $reinteg;
	}
	
	function premio($recaudacion,$n1,$n2,$n3,$n4,$n5,$nc,$nr){
		$resultado= $this -> comprobarCombinacion($n1,$n2,$n3,$n4,$n5,$nc);
		$premioo;
		/*CRITERIO DE PREMIOS
		CINCO ACIERTOS: 100%
		CUATRO Y COMPLEMENTARIO: 70%
		CUATRO ACIERTOS: 50%
		TRES Y COMPLEMENTARIO: 25%
		TRES ACIERTOS: 10%
		
		*/
		switch($resultado){
			case self::CINCO:
				$premioo=$recaudacion."€";
				break;
			case self::CUATRO_COMPLEMENTARIO:
				$premioo=$recaudacion*0.7 ."€";
				break;
			case self::CUATRO:
				$premioo=$recaudacion*0.5 ."€";
				break;
			case self::TRES_COMPLEMENTARIO:
				$premioo=$recaudacion*0.25 ."€";
				break;
			case self::TRES:
				$premioo=$recaudacion*0.1 ."€";
				break;
			case self::NO_SORTEADO:
				$premioo="Aún no se ha realizado el sorteo";
				break;
			case self::CERO:
				if($this->comprobarReintegro($nr)){
					$premioo=1 ."€";
				}else{
					$premioo=0 ."€";
				}
				break;
			default:
				$premioo=0;
				break;
		}
		
		return $premioo;
	}
}
?>