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
  $nombre = Filtrado::filtrado(ucfirst(strtolower($_POST['nombre'])));
  $puesto = Filtrado::filtrado($_POST['puesto']);
  $sueldo = Filtrado::filtrado($_POST['sueldo']);
  $actualizar = $cone->actualizaDatos($primaryKey,$nombre,$puesto,$sueldo);
  header("Location: index.php");
}else{
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
    <?php
  }

  include_once("footer.php");
  ?>
