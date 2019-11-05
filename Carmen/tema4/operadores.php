<HTML>
	<HEAD>
		<TITLE> Operadores de Bit </TITLE>
	</HEAD>
	<BODY>
	<?php
		function bit_and($x, $y) { echo "$x & $y = ", $x&$y, "<br>"; }
		function bit_or($x, $y) { echo "$x | $y = ", $x|$y, "<br>"; }
		function bit_xor($x, $y) { echo "$x ^ $y = ", $x^$y, "<br>"; }
		function bit_producto($x, $y) { echo "$x << $y = ", $x<<$y, "<br>"; }
		function bit_divide($x, $y) { echo "$x >> $y = ", $x>>$y, "<br>"; }
		function bit_complemento($x) { echo "~$x = ", ~$x, "<br>"; }
		$a = 4; $b= 5; $A = '4'; $B = '5'; $R ='A'; $S = 'B';
		bit_and($a,$b); bit_and($A,$B);bit_and($R,$S);
		bit_or($a,$b); bit_or($A,$B);bit_or($R,$S);
		bit_xor($a,$b); bit_xor($A,$B);bit_xor($R,$S);
		bit_producto($a,$b);
		bit_divide($a,$b);
		bit_complemento($b);
	?>
	</BODY>
</HTML>