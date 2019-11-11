<?php
class Cuenta {
  public $n_cta , $saldo;
  function elige_cta($n) {
    $this->n_cta = $n;
  }
  function dame_saldo() {
    if (empty($this->saldo)) $this->saldo = 100;
    return $this->saldo;
  }
  function entrar_saldo($valor) {
    $this->saldo=$valor;
  }
}
class Matematica {
  public $error='' ;
  function suma($n1,$n2) {
    if ( is_numeric($n1) && is_numeric($n2) ) {
      $this->error = '' ;
      return $n1 + $n2;
    }
    else {
      $this->error = 'Uno de los valores no es numerico' ;
      return 'NaN' ;
    }
  }
  function resta($n1,$n2) {
    if ( is_numeric($n1) && is_numeric($n2) ) {
      $this->error = '' ;return $n1 - $n2;
    }
    else {
      $this->error = 'Uno de los valores no es numerico' ;
      return 'NaN' ;
    }
  }
  function dame_error() {
    return $this->error;
  }
}
function traspaso_saldo( $origen , $destino , $importe) {
  $calc = new Matematica;
  if ( $calc->resta($origen->dame_saldo() , $importe ) < 0 ) {
    $error = $calc->dame_error();
    if ($error<>'') return 'El importe no es númerico';
    else return ' Sin saldo suficiente en cuenta origen';
  }
  else {
    $v1 = $calc->resta($origen->dame_saldo() , $importe );
    $origen->entrar_saldo($v1);
    $v1 = $calc->suma($destino->dame_saldo() , $importe);
    $destino->entrar_saldo($v1);
    return 'OK';
  }
}
// ---------------------------- Proceso principal de la aplicación ------------------------------
$cuenta_A = new Cuenta;
$cuenta_B = new Cuenta; // Crea 2 objetos de la clase Cuenta
$cuenta_A->elige_cta('1234');
$cuenta_B->elige_cta('9876'); // establece nos cuentas en las que actuar
$transfiere = 50; // y el importe a transferir
echo 'Saldos antes del traspaso: <br>'; // muestra saldos antes de transferencia
echo 'cta origen: '.$cuenta_A->dame_saldo().' cta destino: '.$cuenta_B->dame_saldo().' <br>';
$ok = traspaso_saldo( $cuenta_A , $cuenta_B, $transfiere); // realiza la transferencia
If ( $ok=='OK') {
  echo 'Saldos después del traspaso: <br>'; // Sí transferencia efectuada muestra saldos resultantes
  echo 'cta origen: '.$cuenta_A->dame_saldo().' cta destino: '.$cuenta_B->dame_saldo().' <br>';
}
?>
