<?php
require_once('MVC/Modelo/ConectaBDSingleton.php');

class Salarios_modelo{

  private $db;//usada para almacenar la conexion
  private $productos;//almacenaremos los productos

  function __construct() {
    $this->db = ConectaBDSingleton::singleton();//isntanciamos la conexion SQL
    $this->productos=array();
  }
  public function getProductos(){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    $this->productos = $this->db->consultarDatos();
    return $this->productos;
  }
}
?>
