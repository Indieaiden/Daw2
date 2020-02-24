<!DOCTYPE html>
<html lang="es">
  <head>
  </head>
  <body>
    <table>
    <tr>
      <td class="td-header">Id_Producto</td>
      <td class="td-header">Descriocion</td>
    </tr>
    <?php
    foreach ($matrizProductos as $registro) {
      echo "<tr>";
      echo "<td>".$registro["idProducto"]."</td>";
      echo "<td>".$registro["descripcion"]."</td>";
      echo "<tr>";
    }
     ?>
    </table>
  </body>
</html>
