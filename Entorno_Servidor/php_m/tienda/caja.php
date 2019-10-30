<?php
// **************** caja.php ******************
/*
* caja.php Como los anteriores, verifica la sesión, muestra el contenido del 
* carrito y el nombre del cliente, deja el carro vacío y proporciona una 
* enlace de vuelta a la entrada.
*/
include "f_tienda.php"; // incluimos la librería con las funciones auxiliares
comprobarSesion(); // Verificamos que la sesión está activa
?>
<html>
<head> <title>PHP caja.php</title></head>
<body>
<?php
echo "<h1 align=\"center\">Contenido del carrito de ", $_SESSION['usuario'], "</h1>\n";
mostrar_carrito(); // Mostramos el contenido
$_SESSION = array(); // "Vaciamos" el contenido de las variables de sesión
?>
<p align='center'>Pulsa <a href='entrada.php'>aquí</a> para continuar...</p>
</body>
</html>