<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>getSet magico simple</title>
  </head>
  <body>
    <?php
    class Coche{
      private $color;
      private $velocidad;
      private $marca;
      private $puertas;
      //no velocidad menor que 0
      //marca solo puede ser audi o seat
      public function __get($propiedad){ //get magico
        return $propiedad;
      }
      public function __set($propiedad, $valor){//set magico
        if (property_exists($this, $propiedad)) {//comprobacion de si existe la propiedad a modificar
          switch ($propiedad) {
            case 'value':
              // code...
              break;
            
            default:
              // code...
              break;
          }
          $this->$propiedad=$valor;
        }
      }

    }
    pepe->$velocidad = -1;
    pepe->$marca="ford";


    ?>

  </body>
</html>
