<?php
class ConectaBDSingleton{
  private $conexion;
  private static $instancia;
  private function __construct(){//Instancia para ooder establecer una conexion pdo
    $dsn = 'mysql:host=localhost;dbname=dwes;charset=utf8';
    $username='root';
    $password ='';
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
  public function consultarDatos($limitDesde="", $limitCuantos=""){ // Ejecuta consulta con o sin limite de resultados y devuelve array de resultados o FALSE sí falla ejecución
    try {
      $limite="";
      if ((!($limitDesde==="") && !($limitCuantos===""))&&(is_numeric($limitDesde) && is_numeric($limitCuantos))) {

        $limite=" LIMIT ".floor($limitDesde).",".floor($limitCuantos)."";
      }
      $qer = $this->conexion->prepare("SELECT * from productos ".$limite.";");
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
  public function borrarDatos($idfabricante, $idproducto){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    try {
      $filas=array();
      $qer = $this->conexion->prepare("delete from productos where lower(idFabricante)= lower(:idF) and lower(idProducto)= lower(:idP) ;");
      $qer ->bindParam(":idF", $idfabricante);
      $qer ->bindParam(":idP", $idproducto);
      $qer ->execute();
    } catch ( PDOException $e) {
      echo ( "¡Error! al ejecutar el borrado: " . $e->getMessage() . "<br/>");
      return false;
    }

  }
  public function actualizaDatos($idfabricante, $idproducto,$descripcion,$precio,$existencias){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    try {
      $filas=array();
      $qer = $this->conexion->prepare("update productos set descripcion= :desc , precio= :precio , existencias= :exix where lower(idFabricante)= lower(:idF) and lower(idProducto)= lower(:idP);");
      $qer ->bindParam(":desc", $descripcion);
      $qer ->bindParam(":precio", $precio);
      $qer ->bindParam(":exix", $existencias);
      $qer ->bindParam(":idF", $idfabricante);
      $qer ->bindParam(":idP", $idproducto);
      $qer ->execute();
    } catch ( PDOException $e) {
      echo ( "¡Error! al actualizar la tabla: " . $e->getMessage() . "<br/>");
      return false;
    }
  }
  public function introducirDatos($idfabricante, $idproducto,$descripcion,$precio,$existencias){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    try {
      $filas=array();
      $qer = $this->conexion->prepare("insert into productos values (:idF,:idP,:desc,:precio,:exix);");
      $qer ->bindParam(":idF", $idfabricante);
      $qer ->bindParam(":idP", $idproducto);
      $qer ->bindParam(":desc", $descripcion);
      $qer ->bindParam(":precio", $precio);
      $qer ->bindParam(":exix", $existencias);
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
