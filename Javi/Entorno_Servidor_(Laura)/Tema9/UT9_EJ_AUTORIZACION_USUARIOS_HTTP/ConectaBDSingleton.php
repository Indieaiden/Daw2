<?php
include_once('Password.php');
class ConectaBDSingleton{
  private $conexion;
  private static $instancia;
  private function __construct(){//Instancia para ooder establecer una conexion pdo
    $dsn = 'mysql:host=localhost;dbname=dwes;charset=utf8';
    $username='javier';
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
  public function getConBD() {
    return $this->conexion;
  }
  public function validaUsuario($user,$pwd){
    $cons = "select pwd_usuario from gestionausuarios where nombre_usuario= ? ;";
    $quer = $this->conexion->prepare($cons);
    $quer -> bindColumn(1,$hashpwd);
    $quer->execute(array($login));
    if ($quer->rowCount()>0) {
      $quer->fetch();
      return Password::verify($pwd,$hashpwd);
    }else {
      return false;
    }

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
?>
