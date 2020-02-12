<?php
//cabecera html
include_once('header.php');
creaHeader("EJ 6 CRUD PDO","Crear un CRUD utilizando PDO");
include_once('ConectaBDSingleton.php');
include_once('Filtrado.php');
//creamos la conection con PDO
$cone = ConectaBDSingleton::singleton();
$arrayDatos = $cone->consulta2("SELECT * from salario;");//ascendente
//print_r($arrayDatos);
?>
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
      foreach ($arrayDatos as $resultado) {//recorrer los datos de la tabla para insertarlos en los tr
        ?>
        <tr>
          <td class="contenido"><?php echo $resultado["dni_empleado"]; ?></td><!--DNI-->
          <td class="contenido"><?php echo $resultado["nombre_empleado"]; ?></td><!--Nombre-->
          <td class="contenido"><?php echo $resultado["puesto_empleado"]; ?></td><!--Puesto-->
          <td class="contenido"><?php echo $resultado["sueldo_empleado"]."€"; ?></td><!--Sueldo-->
          <td class="vacio"><a href="crud_borrar.php?dni=<?php echo $resultado["dni_empleado"];?>"><input type="button" name="borrar" id="borrar" value="Borrar"></a></td><!--Boton que redirige a borra el dato-->
          <td class="vacio"><a href="crud_actualizar.php?dni=<?php echo $resultado["dni_empleado"];?>"><input type="button" name="act" id="act" value="Modificar"></a></td><!--te lleva a la pagina para actualizar los datos del empleado-->
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


//TRAS EL SUBMIT PARA AÑADIR LA INFORMACION
if (!empty($_POST['aniadir'])) {
  $flag=true;
  if (empty($_POST['dni'])) {
    echo "<p>El campo DNI no puede estar vacio!</p>";
    $flag=false;
  }elseif(strlen($_POST['dni'])>10){
    echo "<p>El campo DNI no contener mas de 10 caracteres!</p>";
    $flag=false;
  }
  if (empty($_POST['nombre'])) {
    echo "<p>No has introducido un nombre!</p>";
    $flag=false;
  }
  if (empty($_POST['sueldo'])) {
    echo "<p>No has introducido un sueldo!</p>";
    $flag=false;
  }else if (!is_numeric($_POST['sueldo'])) {
    echo "<p>El sueldo introducido no es un valor numerico (Para decimales se usa le punto) </p>";
    $flag=false;
  }
  /*
  * $dni = strtolower($_POST['dni']);
  * $nombre = strtolower($_POST['nombre']);
  * $puesto = $_POST['puesto'];
  * $sueldo = $_POST['sueldo'];
  * sentencia actualizar: insert into salario values ($dni,$nombre, $puesto, $sueldo);
  */
  if ($flag) {
    $dni = Filtrado::filtrado(strtolower($_POST['dni']));
    $nombre = Filtrado::filtrado(ucfirst(strtolower($_POST['nombre'])));
    $puesto = Filtrado::filtrado($_POST['puesto']);
    $sueldo = Filtrado::filtrado($_POST['sueldo']);

    $aniadido = $cone->consulta2("insert into salario values ('$dni','$nombre', '$puesto', $sueldo);");
  }
}
//footer
include_once('footer.php');
?>
