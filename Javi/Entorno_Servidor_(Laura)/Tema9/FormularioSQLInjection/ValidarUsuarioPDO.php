<?php
class conectaBD{
  private $conexion;
  function __construct(){//Instancia para ooder establecer una conexion pdo
    $dsn = 'mysql:host=localhost;dbname=dwes;charset=utf8';
    $username='javier';
    $password ='Nohay2sin3';
    try{
      $this->conexion = new PDO( $dsn, $username, $password );//intenta iniciar la conexion
    }catch ( PDOException $e){//excepcion!
      die( "¡Error!: " . $e->getMessage() . "<br/>");//si falla, para la ejecucion
    }
  }//fin __construct
  public function __destruct(){ // Cierra conexión asignándole valor null
    $this->conexion = null;
  }
  public function getConBD() {
    return $this->conexion;
  }
  public function consulta1($orden){ // Ejecuta consulta y devuelve array de resultados o FALSE sí falla ejecución
    try {
      $qer = $this->conexion->query($orden);
      $filas=array();
      $qer->setFetchMode(PDO::FETCH_ASSOC);//Establece el modo de obtención para esta sentencia (Clase PDO )
      while ( $rowss = $qer->fetch() )
      $filas[]=$rowss;
      return $filas;
    } catch ( PDOException $e) {
      echo ( "¡Error! al ejecutar consulta: " . $e->getMessage() . "<br/>");
      return false;
    }
  }
  public function consulta2($orden){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    $filas=array();
    $qer = $this->conexion->query($orden);
    if( $qer !== false) {
      $qer->setFetchMode(PDO::FETCH_ASSOC);
      while ( $rowss = $qer->fetch() )
      $filas[]=$rowss;

    }
    return $filas;
  }
  //
  public function actualizaTabla($orden){//realiza update y devuelve false si no se puede ejecutar la consulta
    try {
      $qer = $this->conexion->query($orden);
      $qer ->execute();
    } catch (PDOException $e) {
      echo "Error al actualizar los datos: " . $conexion->error;
      return false;
    }
  }
//  public function introduceDatos($orden){
//
//  }
}

function filtrado($datos){
  $datos= trim($datos); //Elimina espacios antes y despues
  $datos= stripslashes($datos); //Elimina \ para que no te joda el codigo
  $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
  return $datos;
}

?>
