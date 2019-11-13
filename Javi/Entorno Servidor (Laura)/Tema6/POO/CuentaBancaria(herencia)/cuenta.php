<?php
class Cuenta {
  public $n_cta, $saldo; function elige_cta($n) {
    $this->n_cta = $n;
  }
  function entrar_saldo($valor) {
    $this->saldo=$valor;
  }

  function dame_saldo() {
    if (empty($this->saldo)) $this->saldo = 100;
    return $this->saldo;
  }

}
class CuentaMultidivisa extends Cuenta {
  public $divisa ;
  function elige_cta( $n , $divisa='peseta') {
    $this->n_cta = $n; $this->divisa = $divisa;
  }
  function dame_divisa() {
    return $this->divisa;
  }
  function dame_cambio( $div_o , $div_d) {
    $res= 0; $cambios = array();
    $cambios['euro'] = array('euro'=>1 , 'peseta'=>166.36 , 'dolar'=>1.4 );
    $cambios['peseta'] = array('euro'=>1/166.36 , 'peseta'=>1 , 'dolar'=>1.4/166.36);
    $cambios['dolar'] = array('euro'=>1/1.4 , 'peseta'=>166.36/1.4 , 'dolar'=>1) ;
    foreach ( $cambios as $k => $moneda) {
      if ($k == $div_o) {
        foreach ($moneda as $h=>$v) { if ($h == $div_d) $res=$v;}
      }
    }
    return $res;
  }
  function aplicar_cambio($a_divisa) {
    $coef = $this->dame_cambio( $this->divisa, $a_divisa);
    return $this->saldo * $coef ;
  }
  function cambiar_divisa($new_divisa){
    if ( $this->saldo == 0 || empty($this->divisa) ) {
      $this->divisa = $new_divisa;
    }
    else {
      $this->saldo = $this->aplicar_cambio($new_divisa); $this->divisa = $new_divisa;
    }
  }
}
// Crea la cuenta 1234 con saldo de 5000 pesetas y muestra sus datos
$cuenta_A = new CuentaMultidivisa; $cuenta_A->elige_cta('1234'); $cuenta_A->entrar_saldo(5000);
echo 'saldo cta '. $cuenta_A->n_cta .' = ' . $cuenta_A->dame_saldo() .' ' .$cuenta_A->dame_divisa() . '<br>';
$cuenta_A->cambiar_divisa('euro'); // Cambia a euros la divisa de la cuenta y muestra sus datos
echo 'saldo cta '. $cuenta_A->n_cta .' = ' . $cuenta_A->dame_saldo() .' ' .$cuenta_A->dame_divisa() . '<br>';
?>
