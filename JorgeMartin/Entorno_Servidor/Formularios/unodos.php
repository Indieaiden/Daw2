<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_POST['enviar'])){

    /*----------APLICACIÓN-----------*/

      echo $_POST['nombre'];
      echo "<br/>";
      echo $_POST['contrasena'];
      echo "<br/>";

      if (isset($_POST['animal']) ){
        $variable = $_POST['animal'];
        echo (implode(",",$variable));
        echo "<br/>";
      }
      if (isset($_POST['idioma']) ){

        echo (implode(",",$_POST['idioma']));
        echo "<br/>";
      }
      if (isset($_POST['genero']) ){

        echo (implode($_POST['genero']));
      }
    } //Endif ISSET

    else {
      ?>
      <h1>Identificación de usuario.</h1>
      <form action="dos.php" method="post">

        <label for="id_texto">Nombre : </label>
        <input type="text" name="nombre" id="id_texto" value=""/><br/>

        <label for="id_password">Password : </label>
        <input type="password" name="contrasena" id="id_password"/><br/>

        <p>Marca el/los animales que tienes: </p>
        <input type="checkbox" name="animal[]" value="perro"/>Perro<br/>
        <input type="checkbox" name="animal[]" value="gato" />Gato<br/>
        <input type="checkbox" name="animal[]" value="conejo"/>Conejo<br/>
        <input type="checkbox" name="animal[]" value="pajaro"/>Pajaro<br/>
        <input type="checkbox" name="animal[]" value="otro"/>Otro<br/>

        <p>Marca el/los idiomas que conoces: </p>

        <select name= "idioma[]" multiple="multiple">
          <option value="in">Ingles</option>
          <option value="es">Espaniol</option>
          <option value="fr">Frances</option>
          <option value="al">Aleman</option>
          <option value="it">Italiano</option>
        </select>

        <br/>

        <p>Marca tu género: </p>
        <input type="radio" name="genero[]" value="mujer"/>Femenino<br/>
        <input type="radio" name="genero[]" value="hombre"/>Masculino<br/>
        <input type="radio" name="genero[]" value="otro"/>Otro<br/>
        <br/>
        <input name ="enviar" type="submit" value="Enviar"/>

      </form>

      <?php
    }
     ?>
  </body>
</html>
