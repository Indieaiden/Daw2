<?php
require_once('MVC/Modelo/ConectaPDOSingleton.php');

class Productos_modelo{

  private $db;//usada para almacenar la conexion
  private $productos;//almacenaremos los productos

  function __construct() {
    $this->db = ConectaPDOSingleton::singleton();//isntanciamos la conexion SQL
    $this->productos=array();
  }
  public function getProductos(){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    $qer = $this->db->query('select * from productos;');
    if( $qer !== false) {
      $qer->setFetchMode(PDO::FETCH_ASSOC);
      while ( $rowss = $qer->fetch() ){
        $this->productos[]=$rowss;
      }
      return $this->productos;
    }
  }
  /*
  public function showProductos(){ // Ejecuta consulta y devuelve array de resultados o NULL sí falla ejecución
    $qer = $this->db->query('select * from productos;');
    if( $qer !== false) {
      $m = $qer->fetchAll(PDO::FETCH_ASSOC);
      for ($i=0; $i < count($m); $i++) {

        foreach ($m[$i] as $key => $value) {
          echo $key." -> ".$value." | ";
        }
        echo "<br>";
      }
    }
  }
  */
}/*
$cone = new Productos_modelo();
//$cone->showProductos();
$cone->getProductos();
echo "<pre>";
print_r($cone);
echo "</pre>";*/
?>
