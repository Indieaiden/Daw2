<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title>Funciones Tienda</Title>
		<meta charset="UTF-8"/>
		<meta name="Miguel" content="martín García"/>
	</head>
	<body>
		<?php
			class Padre {
				
				//Propiedades
				public $public = 'Public';
				protected $protected = 'protected'; 
				private $private = 'private';
				//metodos
				function printHello(){
					echo $this->public.'<br>'
					echo $this->protected.'<br>'
					echo $this->private.'<br>'
					echo $this->private.'<br>'
				}
			}
		?>
		<?php
			$a = new Padre;
		?>
		<?php
			Class Hijo extends Padre
			//Se pueden redeclarar las propiedades publica y protegida pero no privada
			public $public = 'Public2',
			protected $protected = 'protected2',
			
			function printHello(){
					echo $this->public
					echo $this->protected
					echo $this->private
				}
			?>
	</body>
</html>