<?php
/**
 *
 */
class Matematica
{
  public $error = '';
  function suma($n1,$n2)
  {
    // code...
    if (is_numeric($n1) && is_numeric($n2)) {
      // code...
      $this->error = '';
      return $n1+$n2;
    }
    else {
      $this->error = 'Uno de los valores no es un numero';
      return 'NaN';
    }
  }

  function resta($n1,$n2)
  {
    // code...
    if (is_numeric($n1) && is_numeric($n2)) {
      // code...
      $this->error = '';
      return $n1-$n2;
    }
    else {
      $this->error = 'Uno de los valores no es un numero';
      return 'NaN';
    }
  }
}

  $calculadora = new Matematica;
  echo $calculadora->suma(3,5)."<br>";
  echo $calculadora->resta(3,5)."<br>";
  echo $calculadora->suma('holi',5)."<br>";
  echo $calculadora->error."<br>";
 ?>
