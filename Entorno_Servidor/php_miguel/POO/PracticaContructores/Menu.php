<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title>Practica Objetos</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
			class Menu {
				private $links=array();
				private $nombres=array();
				
				public function rellenar($link,$nombre){
					$this->links[]=$link;
					$this->nombres[]=$nombre;
				}
				private function mostrarHorizontal()
				{
					for($i=0;$i<count($this->links);$i++)
					{
					echo '<a href="'.$this->links[$i].'">'.$this->nombres[$i].'    </a>';
					}
				}
				private function mostrarVertical()
				{
					for($i=0;$i<count($this->links);$i++)
					{
					echo '<a href="'.$this->links[$i].'">'.$this->nombres[$i].'</a>';
					echo "<br>";
					}
				}
				
				function mostrar($voh)
				{
					if($voh==0){
						$this->mostrarHorizontal();
					}
					else{
						$this->mostrarVertical();
					}
				}
			}
		?>
		<?php
		$menu = new Menu();
		$menu->rellenar("https://es.wikipedia.org/wiki/Wikipedia:Portada","Wiki");
		$menu->rellenar("#","XX");
		$menu->rellenar("#","XX");
		$menu->rellenar("#","XX");
		$menu->mostrar(1);
		?>
	</body>
</html>