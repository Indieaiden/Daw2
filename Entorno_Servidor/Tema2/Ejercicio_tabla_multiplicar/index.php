
<!--
Crear un formulario con varios campos, en
los que el usuario mete los datos y después
procesar los datos en procesar.php
-->

<!-- No comprueba si el segundo
número es mayor que el primero, lo da por hecho -->

  <?php
  include_once("header.php");
    ?>

    <style media="screen">
      body {
        text-align: center;
      }
    </style>
    <!-- Título -->

    <h1> Bienvenido a la tabla de multiplicar </h1>

    <!-- Formulario -->
      <form class="" action="procesado_datos.php" method="post">
    <label for="id_desde">Desde el numero</label>
    <input type="text" name="desde" size="40" id="id_desde"> <br><br>
    <label for="id_hasta">Hasta el numero</label>
    <input type="text" name="hasta" size="40" id="id_hasta"> <br><br>
      <input type="submit" value="Ver tabla"> <br>
    </form>

    <?php
    include_once("footer.php");
      ?>
