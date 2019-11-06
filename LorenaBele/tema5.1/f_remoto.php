<?php
// Definimos el nombre del recurso remoto del que se va a leer y el nombre del fichero local donde se va a escribir
define("FICH_REMOTO", 'http://192.168.98.124/tema5.1/fich_salida.txt'); // x.y.w.z es la IP del servidor remoto
define("FICH_LOCAL", 'hola.txt');
// Abrimos los ficheros y comprobamos resultados
$fich_remoto = @fopen(FICH_REMOTO, 'r') or die("ERROR al abrir el recurso remoto1");
$fich_local = @fopen(FICH_LOCAL, 'w') or die("ERROR al abrir el recurso local1");
$contador_bytes = 0; // inicializamos a 0 el contador de bytes procesados
$contador_linea =0; //inicializamos a 0 el contador de lineas procesados
// Procesamos cada línea del recurso remoto hasta que alcance el final de fichero
while ($linea = fgets($fich_remoto))
{ $nbytes = fwrite($fich_local, $linea) ; // escribimos la línea leida en el fichero local
$contador_bytes = $contador_bytes + $nbytes ; // Incrementamos el contador con el no de bytes procesados
$contador_linea ++;
}
fclose($fich_remoto); // cerramos los ficheros
fclose($fich_local);
echo "Total de bytes procesados: $contador_bytes<br /> $contador_linea"; // Mostramos el número de bytes leídos (y escritos)
?>