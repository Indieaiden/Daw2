<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title>Practica Objetos</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
			class Tabla {
				
				//Propiedades
				private $posicion=array(); 
				private $numfilas;
				private $numcolumnas; 
				private $backColor=array(); 
				private $fontColor=array(); 
				
				//metodos
				function __construct($filas,$columnas){
					$this->numfilas = $filas;
					$this->numcolumnas = $columnas;
				}
				
				function rellenar($fila,$columna,$dato,$backColor,$fontColor){
					$this->posicion[$fila][$columna]= $dato;
					$this->backColor[$fila][$columna]= $backColor;
					$this->fontColor[$fila][$columna]= $fontColor;
				}
				 function pintar(){
					echo'<table border="1px">';
					for($i=1;$i<=$this->numfilas;$i++){
						echo'<tr>';
					  for($j=1;$j<=$this->numcolumnas;$j++){
						 echo '<td style="color:'.$this->fontColor[$i][$j].';background-color:'.$this->backColor[$i][$j].'">'.$this->posicion[$i][$j].'</td>';
					  }
						echo'</tr>';
					}
					echo'</table>';
				  }
			}
		?>
		<?php
			$tabla = new Tabla(3,3);
			$tabla->rellenar(1,1,"xxxx","#2746B9","#FFFFFF");
			$tabla->rellenar(1,2,"xfsd","#2746B9","#FFFFFF");
			$tabla->rellenar(1,3,"afs d","#2746B9","#FFFFFF");
			$tabla->rellenar(2,1,"xxxx","#2746B9","#FFFFFF");
			$tabla->rellenar(2,2,"xxxx","#2746B9","#FFFFFF");
			$tabla->rellenar(2,3,"xxxx","#2746B9","#FFFFFF");
			$tabla->rellenar(3,3,"xxxx","#2746B9","#FFFFFF");
			$tabla->rellenar(3,2,"xxxx","#2746B9","#FFFFFF");
			$tabla->rellenar(3,1,"xxxx","#2746B9","#FFFFFF");
			$tabla->pintar();
		?>
	</body>
</html>