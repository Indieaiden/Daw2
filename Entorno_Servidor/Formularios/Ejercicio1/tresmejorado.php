<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tresmejorado</title>
  </head>
  <body>
    <?php
    function filtrado($datos){
      $datos = trim($datos);//elimina espacios antes y después de los datos
      $datos = stripslashes($datos);//elimina Backslashes
      $datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
      return $datos;
    }
    function validar () {
      echo "Validado <br>";
      return false;
    }
    function mostrarDatos () {
      $cadena = filtrado($_REQUEST['cadcar']);
  		print ($cadena);
  		print ("<br>");
  		$sexo = $_REQUEST['genero'];
  		print ($sexo);
  		print ("<br>");
  		$aditivos = $_REQUEST['aditivos'];
  		foreach($aditivos as $aditivo)
  		print ("$aditivo <br>");
  		$username =$_REQUEST['username'];
  		print ($username);
  		print ("<br>");
  		$clave = filtrado($_REQUEST['clave']);
  		print ($clave);
  		print ("<br>");
  		$color = $_REQUEST['color'];
  		print ($color);
  		print ("<br>");
  		$idiomas = $_REQUEST['idiomas'];
  		foreach($idiomas as $idioma)
  			print ("$idioma<br>");
  		print ("<br>");
  		$comentario = filtrado($_REQUEST['comentario']);
  		print ($comentario);
  		print ("<br>");
    }
    function mostrarFormulario () { ?>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  			<input type="text" name="cadcar" value="cadena caracteres" size="20">
  			<br><br>
  			<input type="radio" name="genero" value="M" checked="checked">Mujer
  			<input type="radio" name="genero" value="H" >Hombre
  			<input type="radio" name="genero" value="N" >NB
  			<br><br>
  			<input type="checkbox" name="aditivos[]" value="dinero" checked="checked"> Omnia
  			<input type="checkbox" name="aditivos[]" value="comida"> Vincit
  			<input type="checkbox" name="aditivos[]" value="tiempo"> Amor
  			<br><br>
  			<input type="hidden" name="username" value="usuario">
  			<br><br>
  			<input type="password" name="clave">
  			<br><br>
  			<select name ="color">
  				<option value="rojo" selected>Rojo</option>
  				<option value="verde">Verde</option>
  				<option value="azul">Azul</option>
  			</select>
  			<br><br>
  			<select multiple size="3" name="idiomas[]">
  				<option value="ingles" selected>inglés</option>
  				<option value="frances">Francés</option>
  				<option value="aleman">Alemán</option>
  				<option value="japones">Japonés</option>
  			</select>
  			<br><br>
  			<textarea cols="50" rows="4" name="comentario"> En un lugar de la mancha, de cuyo nombre no quiero acordarme...</textarea>
  			<br><br>
  			<input type="submit" name="enviar" value="Procesar">
  		</form>
      <?php
    }
    function formularioRojo() {

    }


    // -----------------MAIN---------------------

    if (isset($_POST['enviar'])){

      $valido = validar();

        if ($valido) {
          mostrarDatos();
        } else {
          formularioRojo();
        }
    }  else {
      mostrarFormulario();
    }

     ?>
  </body>
</html>
