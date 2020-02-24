<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
  <h1>CRUD - Editar informacion</h1>
  <form class="editar_crud" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <thead><!--Thead-->
        <tr>
          <th class="cabeceratabla">Nombre</th>
          <th class="cabeceratabla">Puesto</th>
          <th class="cabeceratabla">Salario</th>
          <th class="vacio"></th>
          <th class="vacio"></th>
        </tr>
      </thead><!--FIN THEAD-->
      <tbody><!--Cuerpo del delito-->
        <tr>
          <td><input type="text" name="nombre" size="15" value="<?php echo $_GET["nombre"];?>"></td>
          <td><input type="text" name="puesto" size="15" value="<?php echo $_GET["puesto"];?>"></td>
          <td><input type="text" name="sueldo" size="15" value="<?php echo $_GET["sueldo"];?>"></td>
          <td class="vacio"><input type="hidden" name="dni" value="<?php echo $_GET["dni"];?>"></th>
            <td class="vacio"><input type="submit" name="acttot" id="acttot" value="Actualizar entrada"></td><!--añade los campos rellenados-->
          </tr>
        </tbody>
      </table>
    </form>

  </body>
  </html>
