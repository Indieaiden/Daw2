<?php
/*
* $primaryKey = strtolower($_POST['dni']);
* $nombre = strtolower($_POST['nombre']);
* $puesto = $_POST['puesto'];
* $sueldo = $_POST['sueldo'];
* sentencia actualizar: update salario set nombre_empleado='$nombre', puesto_empleado='$puesto', sueldo_empleado=$sueldo where lower(dni_empleado)='$primaryKey';"
*/
include_once('header.php');
creaHeader("EJ 6 CRUD PDO","Crear un CRUD utilizando PDO");
include_once('ConectaBDSingleton.php');
include_once('Filtrado.php');

$cone = ConectaBDSingleton::singleton();//reutilizamos la conexion singleton para poder hacer la consulta

if (!empty($_POST['acttot'])) {
  $primaryKey = Filtrado::filtrado(strtolower($_POST['dni']));
  $nombre = Filtrado::filtrado(ucfirst($_POST['nombre']));
  $puesto = Filtrado::filtrado($_POST['puesto']);
  $sueldo = Filtrado::filtrado($_POST['sueldo']);
  $actualizar = $cone->consulta1("update salario set nombre_empleado='$nombre', puesto_empleado='$puesto', sueldo_empleado=$sueldo where lower(dni_empleado)='$primaryKey';");
  header("Location: index.php");
}else{

$primaryKey = $_GET['dni'];
$consulta = $cone->consulta2("select * from salario where lower(dni_empleado)='$primaryKey';");
?>
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
      <?php
      foreach ($consulta as $resultado) {//recorrer los datos de la tabla para insertarlos en los tr
        ?>
        <tr>
          <td><input type="text" name="nombre" size="15" value="<?php echo $resultado["nombre_empleado"];?>"></td>
          <td><input type="text" name="puesto" size="15" value="<?php echo $resultado["puesto_empleado"];?>"></td>
          <td><input type="text" name="sueldo" size="15" value="<?php echo $resultado["sueldo_empleado"];?>"></td>
          <td class="vacio"><input type="hidden" name="dni" value="<?php echo $resultado["dni_empleado"];?>"></th>
          <td class="vacio"><input type="submit" name="acttot" id="acttot" value="Actualizar entrada"></td><!--añade los campos rellenados-->
        </tr>
        <?php

      }
      ?>
    </tbody>
  </table>
</form>
<?php
}

include_once("footer.php");
?>
