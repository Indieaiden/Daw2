
<?php
$Id = new mysqli("127.0.0.1","root","","dwes");
if ($Id ->connect_errno) {
  echo "Falló conexión a MySQL: " . $Id ->connect_errno . " - " . $Id ->connect_error ;
  exit;
}
if ( ! $Id ->query( "DROP TABLE IF EXISTS T1") || ! $Id ->query("CREATE TABLE T1(n INT, ciudad varchar(50))") ){
  die("Falló creación de la tabla: " . $Id->errno . " - " . $Id->error);
}
// Sentencia parametrizada: etapa 1 preparación
//Preparamos la orden para que admita los valores que se necuentren en cada "?" y si no, para la ejecución
if ( !( $orden = $Id->prepare( "INSERT INTO T1 VALUES ( ? , ? )" ) ) ){
  die("Falló la preparación: " . $Id>errno . " - " . $Id->error);
}
// Sentencia parametrizada: etapa 2 vinculación y ejecución
$y = array( 'Roma' , 'Paris', 'Berlin', 'Soria', 'Lugo');
$x = 0;
$z= $y[$x];
if ( ! $orden->bind_param( "is", $x , $z) ) {// Vincula parámetros X e Y con variables "?"
  echo "Falló la vinculación de parámetros: " . $orden->errno . "- " . $orden->error;
}
if ( ! $orden->execute() ) { // Ejecuta la orden
  echo "Falló la ejecución: " . $orden->errno . "- " . $orden->error;
}
// ejecución repetida de la orden, solo se transfiere datos de cliente a servidor
for ($x = 1; $x < 5 ; $x++) {
  $z= $y[$x];
  if ( ! $orden->execute() ) {
    echo "Falló la ejecución: " . $orden->errno . "- " . $orden->error;
  }
}
$orden->close(); // libera recursos de sentencia parametrizada
$Id->close(); // cierra conexión
?>
