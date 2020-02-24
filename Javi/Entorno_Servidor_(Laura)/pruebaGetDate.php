<?php
echo "<h4>segundos desde la época Unix</h4>";
echo getDate()[0];
echo "<br><h4>horas</h4>";
echo getDate()["hours"];
echo "<br><h4>minutos</h4>";
echo getDate()["minutes"];
echo "<br><h4>segundos</h4>";
echo getDate()["seconds"];
echo "<br><h4>dia de la semana, del 0-6, domingo(0) a sabado(6) </h4>";
echo getDate()["wday"];
echo "<br><h4>switch dia de la semana, domingo(0) a sabado(6) </h4>";
switch (getDate()["wday"]) {
  case 0:
    echo "Domingo";
    break;
  case 1:
    echo "Lunes";
    break;
  case 2:
    echo "Martes";
    break;
  case 3:
    echo "Miercoles";
    break;
  case 4:
    echo "Jueves";
    break;
  case 5:
    echo "Viernes";
    break;
  case 6:
    echo "Sabado";
    break;
}
echo "<br><h4>dia del año del 0 al 364 (365 si es bisiesto)</h4>";
echo getDate()["yday"];
echo "<br><h4>dia del mes actual</h4>";
echo getDate()["mday"];
echo "<br><h4>Mes del año numero 1-12</h4>";
echo getDate()["mon"];
echo "<br><h4>Mes del año escrito</h4>";
echo getDate()["month"];
echo "<br><h4>Año actual </h4>";
echo getDate()["year"];



 ?>
