<script type="text/javascript">{
  document.title="Padre";
}//Script para cambiar el titulo de la clase
</script>
<?php
class FabricaDiscos{
  //Propiedades
  protected $material="plastiquete";
  //Metodos
    //constructor
    //Metodos
    function setMaterial($materialDisco){
      this->$material=$materialDisco;
    }
    function getMaterial(){
      echo this->$material;
    }
}



?>
