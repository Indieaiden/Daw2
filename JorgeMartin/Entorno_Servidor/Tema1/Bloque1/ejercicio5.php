<?php

  //Declaracion de variables
  $nombre = "Paburito";
  $apellidos = "Pérez García";
  $direccion = "Calle Falsa 123";
  $telefono = "123456789";

  $vector = array('nombre' => $nombre,'apellidos' => $apellidos
  ,'direccion' => $direccion ,'telefono' => $telefono);

  //Estilo de tablas
  echo "<style> table, th, td {
  border: 1px solid black;
} </style>";

  //Tabla
  echo "<table>";

    foreach ($vector as $key => $value) {
      echo "<tr>";

      echo "<td>". $key ."</td>";
      echo "<td>". "=>" ."</td>";
      echo "<td>". $value ."</td>";

      echo "</tr>";
    }

  echo "</table>";


 ?>
