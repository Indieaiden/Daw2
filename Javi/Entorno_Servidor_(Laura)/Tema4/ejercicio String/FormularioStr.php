<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="utf-8">
  <meta name="description" content="Formulario funciones String">
  <meta name="author:" content="Javier Fernandez">
  <title>Formulario funciones String</title>
  <style media="screen">
  form{
    border: 1px solid black;
    padding-left: 10px;
    display: inline-block;
  }
  *{
    margin-bottom: 1%;
  }
  </style>
</head>
<body>
  <form class="form" action="respuestaform.php" method="post">
    <table class="tb01" ><!--tabla 1-->
      <caption>Longitudes String</caption>
      <tr>
        <td>
          <label>Escribe algo:</label>
        </td>
        <td colspan="2">
          <input type="text" name="testo" placeholder="escribe algo aqui...">
        </td>
      </tr>
      <tr>
        <td>
          <label>strlen</label>
          <input type="radio" value="o1" name="opciones"><!-- funcion strlen-->
        </td>
        <td>
          <label>strtoupper</label>
          <input type="radio" value="o2" name="opciones"><!-- funcion strtoupper-->
        </td>
        <td >
          <label>strtolower</label>
          <input type="radio" value="o4" name="opciones"><!-- funcion strtolower-->
        </td>
      </tr>
      <tr>
        <td>
          <label>ucwords</label>
          <input type="radio" value="o3" name="opciones"><!-- funcion ucwords-->
        </td>
        <td>
          <label >ucfirst</label>
          <input type="radio" value="o5" name="opciones"><!-- funcion ucfirst-->
        </td>
        <td >
          <label >ord (ASCII 1 caracter)</label>
          <input type="radio" value="o6" name="opciones"><br>
        </td>
      </tr>
      <tr>
        <td colspan="3"><input type="submit" name="resultado" value="ver_resultado"></td><!-- boton submit-->
      </tr>
    </table>
  </form>
  <form class="form" action="respuestaform.php" method="post">    <table class="tb02"><!--tabla 2-->
    <caption>Eliminar espacios String</caption>
    <tr>
      <td>
        <label>Escribe algo:</label>
      </td>
      <td colspan="3">
        <input type="text" name="testo1" placeholder="escribe algo aqui...">
      </td>
    </tr>
    <tr>
      <td>
        <label >ltrim</label>
        <input type="radio" value="o7" name="opciones2"><!-- funcion ltrim-->
      </td>
      <td>
        <label >rtrim</label>
        <input type="radio" value="o8" name="opciones2"><!-- funcion rtrim-->
      </td>
      <td>
        <label >trim</label>
        <input type="radio" value="o9" name="opciones2"><br><!-- funcion trim-->
      </td>
      <td>
        <label >chop</label>
        <input type="radio" value="10" name="opciones2"><br><!-- funcion chop-->
      </td>
    </tr>
    <tr>
      <td colspan="4"><input type="submit" name="resultado1" value="ver_resultado"></td><!-- submit 1-->
    </tr>
  </table>
</form>
<br>
<form class="form" action="respuestaform.php" method="post">
  <table class="tb03"><!--tabla 3-->
    <caption>Extraer porciones String</caption>
    <tr>
      <td>
        <label>Escribe algo:</label>
      </td>
      <td>
        <input type="text" name="testo21" placeholder="escribe algo aqui...">
      </td>
    </tr>
    <tr>
      <td>
        <label>Extraer n:</label>
      </td>
      <td>
        <input type="text" name="n_n" placeholder="letras a extraer">
      </td>
    </tr>
    <tr>
      <td>
        <label >Extraer m (op):</label>
      </td>
      <td >
        <input type="text" name="n_m" placeholder="letras a extraer">
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <label >substr ("str",n)</label>
        <input type="radio" value="subs1" name="opciones3">
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <label >substr ("str",n, m)</label>
        <input type="radio" value="subs2" name="opciones3">
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="resultado2" value="ver_resultado"></td><!--submit 2-->
    </tr>
  </table>
</form>
<form class="form" action="respuestaform.php" method="post">
  <table class="tb04"><!--tabla 4-->
    <caption>Modificaciones String</caption>
    <tr>
      <td>
        <label>Escribe algo (S1):</label>
      </td>
      <td>
        <input type="text" name="testo31" placeholder="valor a remplazar/invertir">
      </td>
    </tr>
    <tr>
      <td>
        <label >Escribe algo (S2):</label>
      </td>
      <td >
        <input type="text" name="testo32" placeholder="sustituir por...">
      </td>
    </tr>
    <tr>
      <td>
        <label >Escribe algo (S3):</label>
      </td>
      <td >
        <input type="text" name="testo33" placeholder="¿En que palabra?">
      </td>
    </tr>
    <tr>
      <td>
        <label >repetir n:</label>
      </td>
      <td>
        <input type="text" name="nn_n" placeholder="veces a repetir 'S1'">
      </td>
    </tr>
    <tr>
      <td>
        <label >strrev</label>
        <input type="radio" value="11" name="opciones4">
      </td>
      <td>
        <label >str_replace ("S1","S2", "S3")</label>
        <input type="radio" value="12" name="opciones4">
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <label >repeat ("S1",n)</label>
        <input type="radio" value="13" name="opciones4">
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="resultado3" value="ver_resultado"></td><!--Submit3-->
    </tr>
  </table>
</form>
</body>
</html>
