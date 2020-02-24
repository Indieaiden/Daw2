<?php
class ConectaBDSingleton{
  private $conexion;
  private static $instancia;
  private function __construct(){//Instancia para ooder establecer una conexion pdo
    $dsn = 'mysql:host=localhost;dbname=dwes;charset=utf8';
    $username='manager';
    $password ='Nohay2sin3';
    try{
      $this->conexion = new PDO( $dsn, $username, $password );//intenta iniciar la conexion
    }catch ( PDOException $e){//excepcion!
      die( "¡Error!: " . $e->getMessage() . "<br/>");//si falla, para la ejecucion
    }
  }//fin __construct
  public static function singleton(){ //método singleton que crea instancia sí no está creada
    if (!isset(self::$instancia)) {
      $miclase = __CLASS__;
      self::$instancia = new $miclase;
    }
    return self::$instancia;
  }
  public function __destruct(){ // Cierra conexión asignándole valor null
    $this->conexion = null;
  }
  public function __clone(){ // Evita que el objeto se pueda clonar{
    trigger_error('La clonación  no está permitida', E_USER_ERROR);
  }
  public function consultarDatos($selccion="*"){ // Ejecuta consulta y devuelve array de resultados o FALSE sí falla ejecución
    try {
      $qer = $this->conexion->query("SELECT $selccion from salario;");
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
  public function borrarDatos($dni){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    try {
      $filas=array();
      $qer = $this->conexion->prepare("delete from salario where lower(dni_empleado)= :dni ;");
      $qer ->bindParam(":dni", $dni);
      $qer ->execute();
    } catch ( PDOException $e) {
      echo ( "¡Error! al ejecutar el borrado: " . $e->getMessage() . "<br/>");
      return false;
    }

  }
  public function actualizaDatos($dni,$nombre,$puesto,$sueldo){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    try {
      $filas=array();
      $qer = $this->conexion->prepare("update salario set nombre_empleado= :nombre , puesto_empleado= :puesto , sueldo_empleado= :sueldo where lower(dni_empleado)= :dni;");
      $qer ->bindParam(":dni", $dni);
      $qer ->bindParam(":nombre", $nombre);
      $qer ->bindParam(":puesto", $puesto);
      $qer ->bindParam(":sueldo", $sueldo);
      $qer ->execute();
    } catch ( PDOException $e) {
      echo ( "¡Error! al actualizar la tabla: " . $e->getMessage() . "<br/>");
      return false;
    }
  }
  public function introducirDatos($dni,$nombre,$puesto,$sueldo){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    try {
      $filas=array();
      $qer = $this->conexion->prepare("insert into salario values (:dni,:nombre,:puesto,:sueldo);");
      $qer ->bindParam(":dni", $dni);
      $qer ->bindParam(":nombre", $nombre);
      $qer ->bindParam(":puesto", $puesto);
      $qer ->bindParam(":sueldo", $sueldo);
      $qer ->execute();
    } catch ( PDOException $e) {
      echo ( "¡Error! al actualizar la tabla: " . $e->getMessage() . "<br/>");
      return false;
    }
  }
  //
  //  public function introduceDatos($orden){
  //
  //  }
}
?>
