<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php

  class NoCoche {}

  /**
   * Clase coche con dos propiedades: color velocidad;
   * Tres constructores,
   * uno que no recibe parámetros: Color blanco y velocidad 0
   * Uno con parámetro tipo string: color al Color
   * Uno con parámetro tipo coche, realiza copia de los valores
   * Todo con constructor mágico
   */
  class Coche
  {
    private $color;
    private $velocidad;

    function __construct()
    {
      // getargs te devuelve un array con los argumentos
      //getclass te devuelve el nombre de la clase del primer argumento (Solo debe haber uno)

      $a = func_get_args();

      if (func_num_args()!=0) {
        $c = gettype($a[0]);
        if (method_exists($this,$f='__construct'.$c)){
          call_user_func_array(array($this,$f),$a);
        }
      }
      else {
        /*En caso de que no nos pasen ningún parámetro: */
        //Llamamos a __construct0
        call_user_func_array(array($this,'__construct0'),$a);
      }
    }

    function __construct0() {
      //En este caso hacemos lo DEFAULT
        $this->velocidad = 0;
        $this->color = 'blanco';
        echo "default";
        echo "</br>";
    }

    function __constructstring($veloc)
    {
      // code ...
      $this->velocidad = $veloc;
      echo __FUNCTION__," obtuvo $veloc";
      echo "</br>";
    }
    function __constructobject($coche)
    {
      // code...
      if (is_a($coche, __CLASS__)){
        $this->velocidad = $coche->velocidad;
        $this->color = $coche->color;
        $clase = get_class($coche);
        echo __FUNCTION__," obtuvo $clase";
        echo "</br>";
      }
      else {
        echo "No es un coche";
        echo "</br>";
      }
    }
  }

  ?>

  <?php
  $noCoche = new NoCoche();
  $coche1 = new Coche();
  $coche2 = new Coche("AMARILLO");
  $coche3 = new Coche($coche2);
  $coche4 = new Coche($noCoche);
   ?>
  </body>
</html>
