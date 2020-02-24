<?php
include_once("header.php");
include_once("filtroformulario.php");
creaHeader("Uno");
/*Con acceso GET sin estar inicializada la sesión muestra página para que se identifique el usuario ( nombre y clave)
*Con acceso POST, comprueba sí es un usuario válido ( nombre con 5 o más caracteres y clave su nombre al revés).
*Sí es válido , inicia la sesión guardando su nombre, su IP de acceso, tiempo y contador de operaciones con valor 0
*Sí no lo es, muestra página con mensaje del error y vuelve a mostrar la página para que se identifique el usuario
*Sí la sesión está iniciada muestra página con opciones de actualización para que pueda elegir solo una de entre
*ellas, así como elementos para continuar ( script DOS ) o abandonar el proceso (script FINAL ).*/
function formLogin(){
  ?>
  <form class="loginUno" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <table>
      <caption>Bienvenido</caption>
      <tr>
        <td><label for="loginName">Nombre:</label></td>
        <td><input type="text" id="loginName" name="loginName" placeholder="nombre de usuario"></td>
      </tr>
      <tr>
        <td><label for="loginPassword">Clave:</label></td>
        <td><input type="password" id="loginPassword" name="loginPassword" placeholder="contraseña de usuario"></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="send" value="Enviar">
        </td>
      </tr>
    </table>
  </form>
  <?php
}
formLogin();
if (isset($_POST['send'])) {
  $flagerrores = true;
  //nombre con 5 o más caracteres
  if (!strlen(filtrado($_POST['loginName']))>=5) {
    echo "El nombre de usuario debe contenre 5 o mas caracteres";
    $flagerrores=false;
  }
  //contraseña al reves del nombre
  if ($_POST['loginPassword']!=strrev($_POST['loginName'])) {
    echo "Contraseña erronea";
    $flagerrores=false;
  }
  if ($flagerrores) {
    // code...
  }
}else {

}



include_once("header.php");
?>
