<?php

$idConex = new mysqli("127.0.0.1", "root", "", "dwes");
if ($idConex ->connect_errno) {
  echo "Falló conexión a MySQL: (" . $idConex ->connect_errno . ") " . $idConex ->connect_error;
}
if ( !$idConex ->query( "DROP TABLE IF EXISTS pepe") || !$idConex ->query("CREATE TABLE pepe(login varchar(20), clave varchar(20), PRIMARY KEY (login))") ||
!$idConex ->query( "INSERT INTO pepe VALUES ('pepito','123456') , ('maria','654321')") ) {
echo "Falló la creación de la tabla: (" . $idConex->errno . ") " . $idConex->error;
}

// Guarda en $orden las sentencias a ejecutar
$orden = " SELECT COUNT(*) as Tfilas FROM pepe ; INSERT INTO pepe VALUES ('mario','0l4k3a23') ; " ;
$orden = $orden . " SELECT COUNT(*) as Tfilas FROM pepe ; ";
if ( !$idConex->multi_query( $orden ) ) { // Ejecuta el conjunto de ordenes de $orden
  echo "Falló la multiconsulta: (" . $idConex->errno . ") " . $idConex->error;
}
do { // repetir
  if ( $result = $idConex->store_result() ) { // Obtener resultados de una orden y guardalos en $result
    while ( $fila = $result->fetch_assoc() ) { // Extraer fila de $result y la guarda en $fila
      echo " Total = " . $fila['Tfilas'] . "<br>"; } // Mostrar contenido de fila extraida
      $result->free(); // liberar recursos
    }
  } while ($idConex->more_results() && $idConex->next_result() ); // mientras haya resultados
  $idConex->close();


  ?>
