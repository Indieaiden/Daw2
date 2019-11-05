
		<?php
			include 'header.php';
			echo "Hola mundo!!";
			$cadena = "casa";
			$cadena2 = 'hola';
			$cadena3 = <<<EOD
			cadenita
			muy larga
			jeje
EOD;
			$a = 25;
			$b = 025;
			$c = 0x25;
			$d = 3.4e6;
			$valor1 = true;
			$valor2 = false;
			
			var_dump($cadena,$cadena2,$cadena3,$a,$b,$c,$d,$valor1,$valor2);
			require 'footer.php';
		?>
