<!DOCTYPE html>
	<head>
		<Title> Ejercicio Variables </Title>
	</head>
	<body>
		<?php
			$vboolean = True;
			$ent = 1;
			$vent2 = 07;
			$vent3 = 0x1F;
			$vent4 = -1;
			$vflot = 302.23;
			$vflot2 = 349253e-3;
			$vstr = 'Hola';
			$vstr4 = '\'Hola\'';
			$vstr2 = "$vstr Mundo";
			$vstr5 = "Me debes 20\$";
			$vstr3 = <<<DBD
			 esto es una cadena
DBD
;
			var_dump($vboolean);
			echo "<br>";
			var_dump($ent);
			echo "<br>";
			var_dump($vent2);
			echo "<br>";
			var_dump($vent3);
			echo "<br>";
			var_dump($vent4);
			echo "<br>";
			var_dump($vflot);
			echo "<br>";
			var_dump($vflot2);
			echo "<br>";
			var_dump($vstr);
			echo "<br>";
			var_dump($vstr2);
			echo "<br>";
			var_dump($vstr3);
			echo "<br>";
			var_dump($vstr4);
			echo "<br>";
			var_dump($vstr5);
		?>
	</body>
</html>