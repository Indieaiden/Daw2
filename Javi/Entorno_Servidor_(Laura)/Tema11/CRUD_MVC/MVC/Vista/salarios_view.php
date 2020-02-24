<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
  <table>
    <tr>
      <td class="td-header">dni_empleado</td>
      <td class="td-header">nombre_empleado</td>
    </tr>
    <?php
    foreach ($matrizProductos as $registro) {
      echo "<tr>";
      echo "<td>".$registro["dni_empleado"]."</td>";
      echo "<td>".$registro["nombre_empleado"]."</td>";
      echo "<tr>";
    }
    ?>
  </table>
</body>
</html>
