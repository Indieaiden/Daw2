<?php
//cabecera html
include_once('header.php');
creaHeader("EJ 6 CRUD PDO","Crear un CRUD utilizando PDO");
?>
<h1>CRUD - CreateReadUpdateDelete</h1>
<table>
  <thead><!--Thead-->
    <tr>
      <th>DNI</th>
      <th>Nombre</th>
      <th>Puesto</th>
      <th>Salario</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead><!--FIN THEAD-->
  <tbody><!--Cuerpo del delito-->
    <tr>
      <td>dato1</td>
      <td>dato2</td>
      <td>dato3</td>
      <td>dato4</td>
      <td>botoncito1</td>
      <td>botoncito2</td>
      <td>botoncito3</td>
    </tr>
  </tbody>
</table>

<?php
//footer
include_once('footer.php');
?>
