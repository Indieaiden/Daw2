
<?php

include_once("header.php");

  $numero = 1;
  echo "<style> table, th, td {
  border: 1px solid black;
} </style>";

  echo "<table>";

  for ($i=1; $i <= 10; $i++) {
    echo "<tr>";

    echo "<td>". $numero ."*". $i ."</td>";
    echo "<td>". $numero * $i ."</td>";

    echo "</tr>";
  }

  echo "</table>";

include_once("footer.php");
?>
