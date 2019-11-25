<?php
  define("ADMINISTRADOR", 1);
  define("REGISTRADO", 2);
  define("ERROR_NOREGISTRADO", -1);
  define("ERROR_PASSWORD", -2);
  define("ERROR_EXPIRADO", -3);


  function validaUser($login, $contrasena){

    //Errores con DATETIME

    $usuario1 = array('contrasena' => 'admin',
                     'expiracion' => strtotime('2019-12-28'),
                     'tipo_user' => ADMINISTRADOR,);

    $usuario2 = array('contrasena' => 'user',
                     'expiracion' => strtotime('2019-12-30'),
                     'tipo_user' => REGISTRADO,);

    $users = array('Antonio' => $usuario1,
                      'Sandra' => $usuario2,);



  if (empty($login) == false ){
    if(empty($contrasena) == false){
        }else{
        //echo "La contraseña es obligatoria";
        return ERROR_PASSWORD;
      	}
        }else{
      	//echo "El nombre es obligatorio";
      	return ERROR_NOREGISTRADO;
        }


        $error;

  foreach ($users as $key => $value) {
    // Código kawaii comprobaciones
    strtoupper($login);
    strtoupper($key);
    if ($login == $key) {
      // User EXISTE
      if ($value['contrasena'] == $contrasena) {
        //Contrasenia OK
        $hoy = strtotime(date('Y-m-d'));
        //Si es menor que cero es que se ha pasado porque se
        //resa el de la derecha con el de la izquierda
        if ($value['expiracion'] < $hoy){
          $error = ERROR_EXPIRADO;
        }
        else {
          //Si ha pasado por todo lo anterior, entonces
          //llega hasta aquí y todo OK
           return $value['tipo_user'];
        }
      } else {
        $error = ERROR_PASSWORD;
      }
    } else {
      $error = ERROR_NOREGISTRADO;
    }
  }
  return $error;
}
 ?>
