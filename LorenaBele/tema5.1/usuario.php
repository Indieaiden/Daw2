<html> <head> <title>PHP: Añadir datos a Ficheros</title></head>
<body>
<?php
// Definimos el nombre del fichero de usuarios La estructura de cada línea es: USUARIO|PASSWORD
define("FICH_DATOS", 'usuarios.txt');
// Si el método es GET o falta el nombre de usuario -> mostramos datos
if (($_SERVER['REQUEST_METHOD'] == 'GET') || empty($_POST['user'])){ 
$fich = @fopen(FICH_DATOS, 'r') or die("ERROR al abrir fichero de usuarios"); // abrimos el fichero para lectura
echo "<table align='center' border='1'>\n"; // Generamos la cabecera de la tabla
echo "<tr><th>usuario</th><th>pasword</th</tr>\n";
// Procesamos cada línea del fichero mostrando la información
while ($linea = fgets($fich)){ 

$partes = explode('|', trim($linea)); // "Limpiamos" la línea y la troceamos obtiendo sus componentes
if(!empty($linea)){
echo "<tr><td>$partes[0]</td><td>$partes[1]</td>"; // Escribimos la correspondiente fila de la tabla
	}
}
fclose($fich); // Cerramos el fichero y la tabla
echo "</table><br>\n";
?>
<form name=’f1’ action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
Usuario: <input type='text' name='user' size='10' > &nbsp;
Palabra Clave: <input type='password' name='pclave' size='10' ><br>
<input type='submit' value='Enviar' >
</form>
<?php
}else // Sí el metodo de envio es POST y se reciben datos, añadimos datos al final del fichero
{ $fich = @fopen(FICH_DATOS, 'a') or die("ERROR al abrir fichero"); // abrimos el fichero para añadir al final
$cadena = $_POST['user'] . '|' . $_POST['pclave'] .PHP_EOL; // Creamos cadena a grabar -con su separador-
$ok = fwrite($fich, $cadena); // escribimos datos en el fichero
echo ($ok) ? "Datos añadidos al fichero" : "Error al añadir datos";
fclose($fich); // Cerramos el fichero
echo "<br>Pulsa <a href='usuario.php'>aquí</a> para continuar..."; // Mostramos un enlace al propio script
}
?>
</body>
</html>