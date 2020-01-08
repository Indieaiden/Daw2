<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Alta de aficiones</title>
  <style media="screen">
  table{
    border: 1px solid black;
    margin: auto;
  }
  .af{
    text-align: center;
  }
  input.cta{
    padding: 10px 24px;
    border-radius: 50%;
    border: 1px solid red;
  }
  input.cta:hover {
    background-color: red; /* Green */
    color: white;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;

  }
  </style>
</head>
<body>
  <!--Realizar una página php, para dar de alta las aficiones de una persona.
  Los campos del formulario serán:
  login: campo de edición.
  aficiones: como checkbox, o select multiple.
  Una vez que se envíen:
  - comprobar si está creada la tabla y sino crearla.
  - Tabla: La tabla tendrá login, código y afición.
  - Tabla: El código será un campo AUTO_INCREMENT para que se asigne automáticamente.
  - Insertar las aficiones de ese usuario utilizando una sentencia preparada.
  - Mostrar un mensaje al usuario informando que se ha creado correctamente.-->
  <form action=" <?php $_SERVER["PHP_SELF"] ?> " method="post">
    <table>
      <tr>
        <td > <label for="nombre"> Login: </label> </td>
        <td > <input type="text" name="nombre" id="nombre" placeholder="Nombre de usuario...."> </td>
      </tr>
      <tr>
        <td > <label for="codigo"> Codigo: </label> </td>
        <td > <input type="text" name="codigo" id="codigo" value=""> </td>
      </tr>
      <tr>
        <td colspan="2" class="af"> <label for="aficiones"> Aficiones: </label> </td>
      </tr>
      <tr>
        <td><label>Nadar</label><input type="checkbox" name="aficiones[]" value="Nadar"></td>
        <td><label>Deporte</label><input type="checkbox" name="aficiones[]" value="Deporte"></td>
      </tr>
      <tr>
        <td><label>Dormir</label><input type="checkbox" name="aficiones[]" value="Dormir"></td>
        <td><label>Videojuegos</label><input type="checkbox" name="aficiones[]" value="Videojuegos"></td>
      </tr>
      <tr>
        <td colspan="2"> <input class="cta" type="submit" name="sendear" value="Enviar"> </td>
      </tr>
    </table>
  </form>
</body>
</html>
