<?php
class conectaBD{
  protected $conexion;
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
}

function filtrado($datos){
  $datos= trim($datos); //Elimina espacios antes y despues
  $datos= stripslashes($datos); //Elimina \ para que no te joda el codigo
  $datos= htmlspecialchars($datos); //Transforma caracteres especiales para que se lean en HTML
  return $datos;
}

if (isset($_POST["Enviar"])) {
  $user = filtrado($_POST["usuario"]);
  $pwd = filtrado($_POST["contrasenia"]);
  $isuser = false;

  //Procesar consulta

  $Id = new conectaBD();
  $consulta = $Id->consulta2("SELECT * from usuario where login='$user' AND clave='$pwd'");//ascendente

  if (!$consulta==1) {
    echo "ACESSO DENEGADO";
  }else{
    echo "BIENVENID@ ".$user;
  }
  ?>
  <br>
  <a href="<?php $_SERVER["PHP_SELF"]; ?>">Volver</a>
  <?php

}else{
  ?>
  <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="usuario">USUARIO: </label>
    <input type="text" name="usuario" placeholder="nombre de usuario"><br>
    <label for="contrasenia">CONTRASEÑA: </label>
    <input type="password" name="contrasenia" placeholder="Contraseña de usuario"><br>
    <input type="submit" name="Enviar" value="Enviar">
  </form>


  <?php
  //Consultita para tener los usuarios siempre visibles para tesst
  $Id = new mysqli("127.0.0.1", "javier", "Nohay2sin3", "dwes");
  $Id->real_query("SELECT * FROM usuario");//ascendente
  $result = $Id->store_result();
  while ($fila = $result->fetch_assoc()) {
    echo " usuario = ".$fila['login']."<br>";
    echo " pwd = ".$fila['clave']."<br>";
  }
}

?>
