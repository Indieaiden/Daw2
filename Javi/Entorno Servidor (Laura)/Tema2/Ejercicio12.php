<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio12</title>
    <meta name="author" content="Javier Fernandez">
    <meta name="description" content="Ejercicio 12">
    <style media="screen">

    </style>
  </head>
  <body>
    <table>
      <tr>
        <!--<?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>-->
        <td style='background-color:<?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>'>Esto</td>
        <td style='background-color:<?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>'>Es</td>
      </tr>
      <tr>
        <td style='background-color:<?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>'>Una</td>
        <td style='background-color:<?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>'>Tabla</td>
      </tr>
    </table>
  </body>
</html>
