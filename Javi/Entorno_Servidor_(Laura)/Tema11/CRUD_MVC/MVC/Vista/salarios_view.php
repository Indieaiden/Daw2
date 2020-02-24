<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
  <h1>CRUD - CreateReadUpdateDelete</h1>
  <form class="index_crud" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <thead><!--Thead-->
        <tr>
          <th class="cabeceratabla">DNI</th>
          <th class="cabeceratabla">Nombre</th>
          <th class="cabeceratabla">Puesto</th>
          <th class="cabeceratabla">Salario</th>
          <th class="vacio"></th>
          <th class="vacio"></th>
        </tr>
      </thead><!--FIN THEAD-->
      <tbody><!--Cuerpo del delito-->
        <?php
        foreach ($arrayDatosPaginado as $resultado) {//recorrer los datos de la tabla para insertarlos en los tr
          ?>
          <tr>
            <td class="contenido"><?php echo $resultado["dni_empleado"]; ?></td><!--DNI-->
            <td class="contenido"><?php echo $resultado["nombre_empleado"]; ?></td><!--Nombre-->
            <td class="contenido"><?php if($resultado["puesto_empleado"]==null){
              echo "";
            }else {
              echo $resultado["puesto_empleado"];
            }; ?></td><!--Puesto-->
            <td class="contenido"><?php echo $resultado["sueldo_empleado"]."€"; ?></td><!--Sueldo-->
            <td class="vacio"><a href="MVC/Modelo/crud_borrar.php?dni=<?php echo $resultado["dni_empleado"];?>&p=<?php echo $_GET['p']; ?>"><input type="button" name="borrar" id="borrar" value="Borrar"></a></td><!--Boton que redirige a borra el dato-->
            <td class="vacio"><a href="crud_actualizar.php?dni=<?php echo $resultado["dni_empleado"];?>&nombre=<?php echo $resultado["nombre_empleado"];?>&puesto=<?php echo $resultado["puesto_empleado"];?>&sueldo=<?php echo $resultado["sueldo_empleado"];?>">
              <input type="button" name="act" id="act" value="Modificar"></a></td><!--te lleva a la pagina para actualizar los datos del empleado-->
          </tr>
          <?php
          // code...
        }
        ?>
        <tr>
          <td class="contenido"><input type="text" name="dni" size="15" placeholder="Campo obligatorio"></td>
          <td class="contenido"><input type="text" name="nombre" size="15" placeholder="Campo obligatorio"></td>
          <td class="contenido"><input type="text" name="puesto" size="15" placeholder="..."></td>
          <td class="contenido"><input type="text" name="sueldo" size="15" placeholder="Campo obligatorio"></td>
          <td class="vacio" colspan="2"><input type="submit" name="aniadir" id="aniadir" value="Añadir nueva entrada"></td><!--añade los campos rellenados-->
        </tr>
      </tbody><!--fin tbody-->
    </table><!--fin table-->
  </form><!--fin formulario-->
  <?php
  //-----------PAGINACION
  ?>
  <form class="paginacion" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
    <?php
    for ($i=1; $i <= $totalPaginas ; $i++) {
      ?>
      <input type="submit" class="<?php if (($i==$_GET['p']) || (!isset($_GET['p']) && ($i==1))){echo "pagination active";}else {echo "pagination"; } ?>" name="<?php echo "p"; ?>" value="<?php echo $i; ?>">
      <?php
    }
    ?>
  </form>
</body>
</html>
