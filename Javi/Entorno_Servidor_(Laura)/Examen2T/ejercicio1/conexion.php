<?php
class Conexion{
  private $conexion;
  private static $instancia;
  private function __construct(){//Instancia para ooder establecer una conexion pdo
    $dsn = 'mysql:host=localhost;dbname=examen;charset=utf8';
    $username='gestor';
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
  //------------------------------------------------ ACCESO USUARIO

  public function consultarDatosAcceso($login,$clave){ // Ejecuta consulta y devuelve array de resultados o FALSE sí falla ejecución
    try {

      $qer = $this->conexion->prepare("SELECT * from acceso where login = :login and clave = :clave ;");//Consulta ACCESO
      $qer ->bindParam(":login", $login);
      $qer ->bindParam(":clave", $clave);
      $qer ->execute();
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
  //------------------------------------------------ EVENTO

  public function consultarDatosEvento($fecha, $hora){ // Ejecuta consulta y devuelve array de resultados o FALSE sí falla ejecución
    try {

      $qer = $this->conexion->prepare("SELECT * from evento where fechaEvento = :fecha and horaEvento= :hora ;");
      $qer ->bindParam(":fecha", $fecha);
      $qer ->bindParam(":hora", $hora);
      $qer ->execute();
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
  //------------------------------------------------ INSERTAR EVENTO
  public function introducirDatosEvento($login,$nombre,$desc,$fecha,$hora,$lugar){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    try {
      $filas=array();
      $qer = $this->conexion->prepare("insert into evento values (:login,:nombre,:desc,:fecha,:hora,:lugar);");
      $qer ->bindParam(":login", $login);
      $qer ->bindParam(":nombre", $nombre);
      $qer ->bindParam(":desc", $desc);
      $qer ->bindParam(":fecha", $fecha);
      $qer ->bindParam(":hora", $hora);
      $qer ->bindParam(":lugar", $lugar);
      $qer ->execute();
    } catch ( PDOException $e) {
      echo ( "¡Error! al actualizar la tabla: " . $e->getMessage() . "<br/>");
      return false;
    }
  }
}
//HASH para la contraseña
class Password {
  public static function hash($password) {
    return password_hash($password, PASSWORD_DEFAULT, [10]);
  }
  public static function verify($password, $hash) {
    return password_verify($password, $hash);
  }
}
//Anti - XSS
class Filtrado{
  function __construct(){  }
  public static function filtrado($datos){
    $datos= trim($datos); //Elimina espacios antes y despues
    $datos= stripslashes($datos); //Elimina \ para que no te joda el codigo
    $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
    return $datos;
  }
}
?>
