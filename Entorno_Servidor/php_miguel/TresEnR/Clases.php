
		<?php
			class Ficha {
				
				//Propiedades
				protected $nombre;
				protected $imagen; 
				
				//constructor
				function __construct($nombre,$imagen){
					$this->nombre = $nombre;
					$this->imagen = $imagen;
				}
				
				//metodos
				function getImagen(){
					return $this->imagen;
				}
				function getNombre(){
					return $this->nombre;
				}
				function etiquetaImg($alt,$alto,$ancho){
					//alt es el texto ALTERNATIVO que hay que ponerle a las imagenes
					//Devuelve la etiqueta img de html con el fichero de la imagen 
					//y las dimensiones por defecto
					//$etiqueta ='<img src="'.$imagen'"  alt="'.$alt'" style="width:'.$ancho'px;height:'.$alto'px;">';
					$etiqueta ="<img src=\"$this->imagen\"  alt=\"$alt\" height=\"$ancho\" width=\"$alto\">";

					return $etiqueta;
				}
			}
		
			class Jugador{
				
				//Propiedades
				private $nombre;
				private $ficha;
				private $puntos;
				
				//constructor
				function __construct($nombre,$ficha){
					//Inicia el turno
					$this->nombre = $nombre;
					$this->ficha = $ficha;
					$this->puntos = 0;
				}
				
				//metodos
				function getFicha(){
					return $this->ficha;
				}
				function getPuntos(){
					return $this->puntos;
				}
				function getNombre(){
					return $this->nombre;
				}
				function sumaPuntos($morepuntos){
					$this->puntos+=$morepuntos;
				}
			}

			// interface Imprimible{
				// function imprime();
			// }
			
			class Tablero{
				
				//Propiedades
				private $ficha1;
				private $ficha2;
				// turno deberia poder tener solo los valores 0 o 1, 0 es el jugador 1 y 1 el dos
				private $turno;
				//array con el estado del tablero
				private $estadoTablero;
				// private $TableroLleno;
				private $rowTablero;	
				
				//constructor
				function __construct($ficha1,$ficha2){
					//por defecto empieza el jugador 1
					$this->turno = 0;
					//Inicializo los arrays que formarán el tablero
					$this->rowTablero = array(array('<a href="#">','<a href="#">','<a href="#">'),array('<a href="#">','<a href="#">','<a href="#">'),array('<a href="#">','<a href="#">','<a href="#">'));
					$this->estadoTablero = array(array('','',''),array('','',''),array('','',''));
					// $this->TableroLleno = false;
					$this->ficha1 = $ficha1;
					$this->ficha2 = $ficha2;
				}
				
				//metodos
				function getFicha(){
					//obtiene la ficha a la que le toca jugar
					if($this->turno == 0){
						echo "Es el turno del jugador 1";
						return $this->ficha1;
					}else{
						echo "Es el turno del jugador 2";
						return $this->ficha2;
					}
				}
				
				function getTurno(){
					return $this->turno;
				}
				
				function CambioTurno(){
					//cambia a la otra ficha
					if($this->turno == 0){
						$this->turno = 1;
					}else{
						$this->turno = 0;
					}
				}
				function iniciar(){
					for($i=0;$i<3;$i++){
						for($j=0;$j<3;$j++){
							$casilla = "?col=$j&row=$i";
							$this->rowTablero[$i][$j] = "<a href=\"{$_SERVER["PHP_SELF"]}$casilla\"><img src=\"imagenes/Fondo.jpg\"><a>";
						}
					}
					return $this->turno;
				}
				
				function mostrar(){
					echo'<table>';
					for($i=0;$i<3;$i++){
						echo '<tr>';
						for($j=0;$j<3;$j++){
							echo '<td>'.$this->rowTablero[$i][$j].'</td>';
						}
						echo '</tr>';
					}
					echo'</table>';
				}
				function ponerFicha($fila,$columna,$ficha){
					//hacer un if para que no sea necesario pedir la ficha,
					//si no que se ponga la ficha de quien es el turno
					//si no que ficha sea una ruta
					$casilla = "?col=$columna&row=$fila";
					$comprobante = "<a href=\"{$_SERVER["PHP_SELF"]}$casilla\"><img src=\"imagenes/Fondo.jpg\"><a>";
					if(strcmp($this->rowTablero[$fila][$columna],$comprobante)== 0){
						//$this->rowTablero[$fila][$columna] = $ficha->etiquetaImg("imagen no encontrada","200","200");
						$this->rowTablero[$fila][$columna] = "<a><img src=\"$ficha\"><a>";
						$this->estadoTablero[$fila][$columna] = $this->getFicha();
						$this->CambioTurno();
					}else{
						echo'<br> Ahí ya hay una ficha, ponla en ptro sitio';
					}
					// if($this->rowTablero[$fila][$columna]==$comprobante){
						// $this->rowTablero[$fila][$columna] = "<a href=\"{$_SERVER["PHP_SELF"]}$casilla\"><img src=\"$ficha\"><a>";
						// $this->CambioTurno();
					// }else{
						// echo'<br> Ahí ya hay una ficha, ponla en ptro sitio';
					// }
				}
				
				
			function verificar() {
				$gana = FALSE;
				if ($this->rowTablero[0][0] === $this->rowTablero[0][1] && $this->rowTablero[0][0] === $this->rowTablero[0][2]) {
					$gana = TRUE;
				} elseif ($this->rowTablero[1][0] === $this->rowTablero[1][1] && $this->rowTablero[1][0] === $this->rowTablero[1][2]) {
					$gana = TRUE;
				} elseif ($this->rowTablero[2][0] === $this->rowTablero[2][1] && $this->rowTablero[2][0] === $this->rowTablero[2][2]) {
					$gana = TRUE;
				} elseif ($this->rowTablero[0][0] === $this->rowTablero[1][0] && $this->rowTablero[0][0] === $this->rowTablero[2][0]) {
					$gana = TRUE;
				} elseif ($this->rowTablero[0][1] === $this->rowTablero[1][1] && $this->rowTablero[0][1] === $this->rowTablero[2][1]) {
					$gana = TRUE;
				} elseif ($this->rowTablero[0][2] === $this->rowTablero[1][2] && $this->rowTablero[0][2] === $this->rowTablero[2][2]) {
					$gana = TRUE;
				} elseif ($this->rowTablero[0][0] === $this->rowTablero[1][1] && $this->rowTablero[0][0] === $this->rowTablero[2][2]) {
					$gana = TRUE;
				} elseif ($this->rowTablero[2][0] === $this->rowTablero[1][1] && $this->rowTablero[0][2] === $this->rowTablero[2][0]) {
					$gana = TRUE;
				}
				return $gana;
		}

				
				
				/*function Verificar($col,$row){
					$final = true;
					if($this->turno == 1){
						$name = $this->ficha1->getNombre();
					}else{
						$name = $this->ficha2->getNombre();
					}
					$fichaActual=$this->estadoTablero[$row][$col]->getNombre();
					// Comprobar las columnas
					for($i=0;$i<3;$i++){
						if($this->estadoTablero[$i][$col]!=''){(no hacer eso y poner empty en su lugar)
							if($name != $this->estadoTablero[$i][$col]->getNombre()){
								$final=false;
							}
						}
					}
					// comprobarFilas
					for($i=0;$i<3;$i++){
						if($this->estadoTablero[$row][$i]!=''){
							if($name != $this->estadoTablero[$row][$i]->getNombre()){
								$final=false;
							}
						}
					}
					// Comprobar Diagonales
					for($i=0;$i<3;$i++){
						if($this->estadoTablero[$i][$i]!=''){
							if($name != $this->estadoTablero[$i][$i]->getNombre()){
								$final=false;
							}
						}
						if($this->estadoTablero[$i][2-$i]!=''){
							if($name != $this->estadoTablero[$i][2-$i]->getNombre()){
								$final=false;
							}
						}
					}
					// Comprobar si ha ganado alguien
					return $final;
				}*/
			}
		?>