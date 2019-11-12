<?php

// Continuamos la sesión
session_start();
// Devolver los valores de sesión
echo "Nombre de usuario: " . $_SESSION["usuario"];

 ?>
<form class="logoit" action="simpleuno.html" method="post">
  <button type="submit" name="button"></button>
</form>
