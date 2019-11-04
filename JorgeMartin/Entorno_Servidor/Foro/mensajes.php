<?php
include_once("header.php");
  ?>
<style media="screen">
  * {
    border = 1px solid black;
  }
</style>
<?php

//Comprobaciones de formulario

$u_check = false;
$p_check = false;

if (isset($_GET['user'])){
  $user = $_GET['user'];
  if (strlen($user) > 5) {
    $u_check = true;

  } else {
    echo "<p> El usuario ha de tener más de cinco caracteres </p>";
  }
}
else {
  echo "<p> FORMULARIO NO INTRODUCIDO CORRECTAMENTE</p>";
}

if (isset($_GET['psswd'])) {
  $psswd = $_GET['psswd'];
  if (strrev($user) == $psswd) {
    $p_check = true;
  } else {
    echo "<p>La contraseña ha de ser el usuario invertido</p>";
  }
} else {
  echo "<p> FORMULARIO NO INTRODUCIDO CORRECTAMENTE</p>";
}

 ?>

<?php
  if ($p_check && $u_check) {
    echo "<h3> Bienvenido, usuario ". $user ." </h3>";
    echo "<h3> Por favor indique el tema, y su comentario </h3>";

  ?>
  <div class="formulario" style="heigth: 30%; width: 30%;">
    <form class="" action="detalle.php" method="get">
      <label for="id_tema">Tema: </label>
      <input type="text" name="tema" size="40" id="id_tema"> <br><br>
      <label for="id_comentario">Comentario: </label>
      <input type="textarea" name="comment" size="40" id="id_comentario"> <br><br>
      <input type="submit" value="Detalles" style="float:right"> <br>
    </form>
    <a href="index.html"> Terminar </a> </br>
<?php
    echo " <a href=\"mensajes.php?user=".$user."&psswd=".$psswd."\"> Nueva Opinion </a>"
  ?>

  </div>
<?php
  }
 ?>

 <?php
 include_once("footer.php");
   ?>
