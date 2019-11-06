<?php
$fichero = @fopen("hola.txt" , 'r'); // Apertura para lectura silenciando errores
if ( !$fichero ) // Si no se ha podido abrir el fichero
die("Error al abrir fichero \"/datos/datos.txt\"");
//SI NO DA ERROR, CONTINUA
echo "Continúa la ejecución del programa <br>";

@(($fichero= fopen("datosNoExiste.txt","r"))) or die ("Error al abrir el fichero");
echo "No ha dado error. Continua la ejecucion del programa <br>";

?>