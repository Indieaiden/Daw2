<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
  class Matematica {
    var $error='' ; // define variable de la clase y le asigna como valor la cadena vacía
    function suma($n1,$n2) {
      if ( is_numeric($n1) && is_numeric($n2) ) {//cmprobamos si ambas variables son numericas
        $this->error = '' ; return $n1 + $n2;
      }
      else {
        $this->error = 'Uno de los valores no es numerico' ;
        return 'NaN' ;
      }
    }
    function resta($n1,$n2) {
      if ( is_numeric($n1) && is_numeric($n2) ) {//cmprobamos si ambas variables son numericas
        $this->error = '' ; return $n1 - $n2;
      }
      else {
        $this->error = 'Uno de los valores no es numerico' ;
        return 'NaN' ;
      }
    }
  }
  $calculadora = new Matematica;//Instanciamos la clase Matematica para poder utilizarla
  echo $calculadora->suma(3,2);
  echo $calculadora->error;
  echo $calculadora->resta(3,"a");
  echo $calculadora->error;
  ?>
</body>
</html>
