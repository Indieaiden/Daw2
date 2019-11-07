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
    //errores empieza vacío???????
			$errores ;
      /*
        Primero comprobamos si el formulario está enviado. En caso de que sí, entramos
        a hacer las comprobaciones pertinentes de nombre, contraseña etc etc. De esta forma,
        ponemos errores con ALGÚN valor.
      */
			if(isset($_POST['enviar'])){

				$longitudCon = strlen($_POST['contrasena']);

        /*
          Una vez ya sabemos que el formulario ha sido enviado, comprobamos si hay errores en
          los datos. En caso de que no haya ninguno, es decir (no esté vacío, etc etc), ponemos ERRORES a false
          y en caso de que haya errores, lo ponemos a true. Así, en el siguiente if, solamente lanzaremos la
          aplicación en caso de que NO haya errores
        */

				/*
					La validación es que la contraseña tenga más de ocho caracteres
					Y que el nombre y la contraseña son obligatorios
				*/
				if (isset($_POST['nombre']) && empty($_POST['nombre']) == false ){
					if(isset($_POST['contrasena']) && empty($_POST['contrasena']) == false){
						if($longitudCon > 8){
							$errores = false;

						}else{
							echo "la longitud de la contraseña tiene que ser mayor que 8";
							$errores = true;
						}
					}else{
						echo "La contraseña es obligatoria";
						$errores = true;
					}
				}else{
					echo "El nombre es obligatorio";
					$errores = true;
				}

				//CUANDO ESTÁ todo VALIDADO, EMPEZAMOS COOKIE
				$nombre = 'nombre';
				$valor = $_POST['nombre'];
				//Creamos la cookie


				if (setcookie($nombre, $valor)) {
				 echo "Se ha creado la cookie ".$nombre." con valor: ".$valor;
			 }
				 else {
					 echo "No se ha podido crear la cookie";
				 }

			} //ENDIF Isset($_POST[enviar]) VALIDAR END


			if(isset($_POST['enviar']) && $errores == false){
        //Aquí se llama a la aplicación en caso de que el formulario esté de puta madre.
				/*----------APLICACIÓN-----------*/
				header('Location: aplicacion.php');
				exit();

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
					<br/>
					<input name ="enviar" type="submit" value="Enviar"/>

				</form>
		<?php

  } //Endelse
		?>
	</body>
</html>
