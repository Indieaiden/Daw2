<?php
	class Coche{
		private $color;
		private $velocidad;

		function __construct() {
			$a = func_get_args();
			$i = func_num_args();
			if ( method_exists( $this,$f='__construct'.$i ) ){
				call_user_func_array( array($this,$f) , $a );
			}

		}
		function __construct0(){
			$this->color ="blanco";
			$this->velocidad =0;
		}
		function __construct1($vari){
			if($vari instanceof Coche){
				$this->color =$vari->color;
				$this->velocidad =$vari->velocidad;
			}else if(is_string($vari)){
				$this->color =$vari;
				$this->velocidad =0;
			}

		}

	}
	$coche1 = new Coche();
	$coche2 = new Coche("Rosa");
	$coche3 = new Coche($coche2);
	print_r($coche1);
	print_r($coche2);
	print_r($coche3);
?>
