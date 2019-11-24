<?php
  define("ADMINISTRADOR", 1);
  define("REGISTRADO", 2);
  define("ERROR_NOREGISTRADO", -1);
  define("ERROR_PASSWORD", -2);
  define("ERROR_EXPIRADO", -3);


  function validaUser($login, $contrasena){
    $users = array('Antonio' => $usuario1, );
                      ('Sandra' => $usuario2, );

    $usuario1 = array('contrasena' => 'admin',
                     'expiracion' => new DateTime('2019-12-28'),);
                     'tipo_user' => ADMINISTRADOR,);

    $usuario2 = array('contrasena' => 'user',
                     'expiracion' => new DateTime('2019-12-30'),);
                     'tipo_user' => REGISTRADO,);

     foreach ($users as $key => $value) {
       // Código kawaii comprobaciones
       strtoupper($login);
       strtoupper($key);
       if ($login == $key) {
         // User EXISTE
         if ($value['contrasena'] == $contrasena) {
           //Contrasenia OK
           $hoy = new Datetime('Y-m-d');
           //Si es menor que cero es que se ha pasado porque se
           //resa el de la derecha con el de la izquierda
           if ($hoy->diff($value['expiracion']<0)) {
             return ERROR_EXPIRADO;
           }
           else {
             //Si ha pasado por todo lo anterior, entonces
             //llega hasta aquí y todo OK
              return $value['tipo_user'];
           }
         }
         else {
           return ERROR_PASSWORD;
         }
       } else {
         // No existe el usuario
         return ERROR_NOREGISTRADO;
       }
     }
  }
 ?>
