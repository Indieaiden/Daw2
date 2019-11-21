<?php
include_once('ClasePadre.php');
class NPC extends PersonajeBase {
  public $alineacion = "Caótico estúpido";

  public function Heroe($vida, $stats, $dialogo, $equipo)
  {
    parent::PersonajeBase($vida, $stats, $dialogo, $equipo);
  }

  public function CambiarAlineacion($value='Bueno')
  {
    $this->alineacion = $value;
    echo "Alineacion: ".$this->alineacion;
  }

}
 ?>
