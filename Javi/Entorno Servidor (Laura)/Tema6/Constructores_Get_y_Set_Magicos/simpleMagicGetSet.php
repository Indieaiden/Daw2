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

      public function __get($propiedad){//get magico
        return $propiedad;
      }
      public function __set($propiedad, $valor){//set magico
        $this->$propiedad=$valor;
      }

    }

    ?>

  </body>
</html>
