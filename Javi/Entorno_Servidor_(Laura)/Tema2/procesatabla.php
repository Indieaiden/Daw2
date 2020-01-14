<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar</title>
    <meta name="author" content="Javier Fernandez">
    <meta name="description" content="Porgramita tabla de multiplicar">
    <style>
      body{
        text-align: center;
      }
      table, td{
        border: 1px solid black;
      }
      td.uno{
        background-color: rgb(247,231,140);
      }
      td.dos{
        background-color: rgb(132,207,255);
      }
      td.border{
        background-color: rgb(231,231,255);
        color: brown;
        font-weight: bold;
      }
      td.X{
        background-color: rgb(231,231,255);
        font-weight: bold;
        color: rgb(252,9,6);
      }
    </style>
  </head>
  <body>
    <?php
    //primer for, horizontal
    if((is_int($_POST["numero_hasta"]))||(is_int($_POST["numero_desde"]))){
      echo '<h1>No has introducido un valor numérico</h1>';
      echo '<form class="fomr" action="tabla.php" >';
      echo '<input type="submit" value="Volver">';
      echo '</form>';
    }else if($_POST["numero_desde"]<$_POST["numero_hasta"]) {
      echo "<table><tr><th colspan=\"11\">Tabla de multiplicar</th></tr>";
      for ($i=($_POST["numero_desde"]-1); $i <= ($_POST["numero_hasta"]); $i++) {
        echo "<tr>";
        //Segundo for, vertical
        for ($j=0; $j < 11; $j++) {
          if ($i==($_POST["numero_desde"]-1) && $j==0) {
            echo "<td class=\"X\"> ". "x". " </td>";
          }else if(($i==($_POST["numero_desde"]-1)&&$j!=0)) {
            echo "<td class=\"border\"> ".($j)." </td>";
          }else if(($i!=($_POST["numero_desde"]-1)&&$j==0)) {
            echo "<td class=\"border\"> ".($i)." </td>";
          }else {
            echo "<td class=";
            if (($i-$j)%2==0) {
              echo "uno";
            } else {
              echo "dos";
            }
            echo">".($i*$j)."</td>";
          }
        }
        echo "</tr>";
      }
      echo "</table>";
    } else if ($_POST["numero_desde"]>$_POST["numero_hasta"]) {
      echo "<table><tr><th colspan=\"11\">Tabla de multiplicar</th></tr>";
      for ($i=($_POST["numero_hasta"]-1); $i <= ($_POST["numero_desde"]); $i++) {
        echo "<tr>";
        //Segundo for, vertical
        for ($j=0; $j < 11; $j++) {
          if ($i==($_POST["numero_hasta"]-1) && $j==0) {
            echo "<td class=\"X\"> ". "x". " </td>";
          }else if(($i==($_POST["numero_hasta"]-1)&&$j!=0)) {
            echo "<td class=\"border\"> ".($j)." </td>";
          }else if(($i!=($_POST["numero_hasta"]-1)&&$j==0)) {
            echo "<td class=\"border\"> ".($i)." </td>";
          }else {
            echo "<td class=";
            if (($i-$j)%2==0) {
              echo "uno";
            } else {
              echo "dos";
            }
            echo">".($i*$j)."</td>";
          }
        }
        echo "</tr>";
      }
      echo "</table>";
    }
    ?>

  </body>
</html>
