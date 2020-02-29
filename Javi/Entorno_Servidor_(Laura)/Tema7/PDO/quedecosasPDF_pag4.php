<?php
class conectaBD{
  public $conn = null ;
  public function __construct($database='test'){
    $dsn ="mysql:host=localhost;dbname=test;charset=utf8" ;
    try {
      $this->conn = new PDO( $dsn ,$usuario='javier',$pass='Nohay2sin3' );
    } catch ( PDOException $e) {
      die( "¡Error!: " . $e->getMessage(
        ) . "<br/>");
    }
  }
  public function __destruct(){ // Cierra conexión asignándole valor null
    $this->conn = null;
  }
  public function creaTablaTask(){ // Crea tabla; devuelve TRUE si tiene exito y FALSE en caso contrario
    $sql = "CREATE TABLE IF NOT EXISTS tasks ( task_id int NOT NULL AUTO_INCREMENT,
    subject varchar(255) DEFAULT NULL,
    start_date date DEFAULT NULL,
    end_date date DEFAULT NULL,
    description varchar(400) DEFAULT NULL,
    PRIMARY KEY (task_id)
  );";
  
  if( $this->conn->exec($sql) !== false) return true;
  return false;
}
}
// ----------- Proceso principal
$obj = new conectaBD( 'empresa' ); // crea conexión para usar bd empresa
if ( $obj->creaTablaTask() ) // invoca método de objeto para crear tabla
echo 'tabla Tasks table creada';
else echo 'Error al crear table Task';
?>
