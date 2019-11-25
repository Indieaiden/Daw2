<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primera página"/>
		<meta name= "author" content= "Jorge Martin Garcia"/>

	</head>
	<body>
		<?php
      include('funciones.php');
			$errores;

			function filtrado($datos){
				$datos = trim($datos);//elimina espacios antes y después de los datos
				$datos = stripslashes($datos);//elimina Backslashes
				$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
				return $datos;
			}

      /*
        Primero comprobamos si el formulario está enviado. En caso de que sí, entramos
        a hacer las comprobaciones pertinentes de nombre, contraseña etc etc. De esta forma,
        ponemos errores con ALGÚN valor.
      */
			if(isset($_POST['enviar'])){

        /*
          Una vez ya sabemos que el formulario ha sido enviado, comprobamos si hay errores en
          los datos. En caso de que no haya ninguno, es decir (no esté vacío, etc etc), ponemos ERRORES a false
          y en caso de que haya errores, lo ponemos a true. Así, en el siguiente if, solamente lanzaremos la
          aplicación en caso de que NO haya errores
        */

				$nombre = filtrado($_POST['nombre']);
				$contrasena = filtrado($_POST['contrasena']);

				$user_valid = validaUser($nombre, $contrasena);
				$errores = false;
				if ($user_valid == -1) {
						echo "Usuario no registrado <br>";
						$errores = true;
				}
				if ($user_valid == -2) {
						echo "Contraseña errónea <br>";
						$errores = true;
				}
				if ($user_valid == -3) {
						echo "Sesión finalizada por tiempo <br>";
						$errores= true;
				}

			} //ENDIF Isset($_POST[enviar])


			if(isset($_POST['enviar']) && $errores==false){
        //Aquí se llama a la aplicación en caso de que el formulario esté bien.

				/*----------APLICACIÓN-----------*/
				session_start();
				if ( !isset( $_SESSION['usuario'] )){ // No está acreditado
					$_SESSION['usuario']= $_REQUEST['nombre'];
					$_SESSION['tipo']= $user_valid;
				}

				if (isset( $_SESSION['usuario'])) {
					// code...
					header('Location: menu.php');
				}

			} //Endif ISSET && ERRORES (Segunda o primera vez que se envía el formulario)

      else{ //A partir de aquí está el Formulario

        /*Dentro de cada uno de los input, hacemos una comprobación en caso
        de que se haya enviado, y si se ha enviado anteriormente se hace un echo
        con el valor de la variable. De esta forma, al reenviar en formulario no se pierden los
        datos*/
		?>
				<h1>Identificación de usuario.</h1>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

					<label for="id_texto">Nombre : </label>
					<input type="text" name="nombre" id="id_texto" value="<?php
					if(isset($_POST['nombre'])){ echo $_POST['nombre'];} ?>"/><br/>

					<label for="id_password">Password : </label>
					<input type="password" name="contrasena" id="id_password"/><br/>

					<input name ="enviar" type="submit" value="Enviar"/>

				</form>
		<?php

  } //Endelse
		?>
	</body>
</html>
