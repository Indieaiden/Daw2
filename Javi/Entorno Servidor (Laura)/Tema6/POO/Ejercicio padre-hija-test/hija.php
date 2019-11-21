<script type="text/javascript">{
  document.title="hija";
}//Script para cambiar el titulo de la clase
</script>
<?php
include_once("padre.php");
/**
 *
 */
class Tiendamusica extends FabricaDiscos{
  //propiedades
  Private $cantidadDiscos=0;
  Private $estiloDisco="Pop";
  Private $tipocd= new FabricaDiscos();


  //Metodos

  function Tiendamusica($estiloMusica, $tock, $tipocd){
    this->$cantidadDiscos=$tock;
    this->$estiloDisco=$estiloMusica;
    this->tipocd= tipocd.setMaterial($tipocd);
  }
  function getStock(){
    echo this->$cantidadDiscos;
  }
  function getEstiloMusical(){
    echo this->$estiloDisco;
  }
  function vendeUnDisco(){
    if ($cantidadDiscos==0) {
      echo "El Stock es de 0, no se pueden descontar mas";
    }else {
      this->$cantidadDiscos--;
    }
  }
  function vendeDiscos($numeroVendido){
    if ((this->$cantidadDiscos - &$numeroVendido)>=0) {
      echo "El Stock es de ".$cantidadDiscos.", no se pueden descontar ".$numeroVendido.", por favor revíselo";
    }else {
      this->$cantidadDiscos-=$numeroVendido;
    }
  }
}




?>
