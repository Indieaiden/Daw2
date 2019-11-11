<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Foro Login</title>
    <meta name="author" content="Javi">
    <meta name="description" content="Ejercicio 5 Tema 4 FORO">
    <style>
      form{ text-align: center; }
      td.label{text-align: right;}
      table{border: 1px solid black;}
    </style>
  </head>
  <body>
    <form class="form" action="mensajes.php" method="post">
      <table>
        <caption>IDENTIFICACIÓN DE USUARIO</caption>
        <tr>
          <td><label class="label">Nombre de usuario:</label></td>
          <td><input type="text" name="usuario" placeholder="Nombre de usario"></td>
        </tr>
        <tr>
          <td class="label"><label>Contraseña:</label></td>
          <td><input type="password" name="pwd" placeholder="Contraseña de usario"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="mensajes" value="Entrar"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
