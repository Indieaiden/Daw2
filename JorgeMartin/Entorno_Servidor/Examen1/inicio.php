<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Inicio</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Ejercicio1 EXAMEN"/>
		<meta name= "author" content= "Jorge Martin Garcia"/>

	</head>
	<body>
		<?php
			$errores;

			function filtrado($datos){
				$datos = trim($datos);//elimina espacios antes y después de los datos
				$datos = stripslashes($datos);//elimina Backslashes
				$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
				return $datos;
			}

      function encontrarCB($string) {
        $flag = false;
        $blanco = ord(' ');
        $array = str_split($string);
        foreach ($array as $char) {
          $nochar = ord($char);
          if($nochar == $blanco) {
            $flag = true;
          }
        }
        return $flag;
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

        $nombre_juego = filtrado($_POST['nombre_juego']);
        $player1 = filtrado($_POST['player1']);
        $player2 = filtrado($_POST['player2']);
        $ncartas = filtrado($_POST['ncartas']);
        $ncartas_part = filtrado($_POST['ncartas_part']);
        $total = filtrado($_POST['total']);
        $euros = filtrado($_POST['euros']);
        $presup = filtrado($_POST['presup']);

				$errores = false;
				if (encontrarCB($nombre_juego)) {
						echo "El nombre no puede tener caracteres en blanco <br>";
						$errores = true;
				}
				if (strlen($player1)  <= 3) {
						echo "El player 1 tiene menos de 3 caracteres <br>";
						$errores = true;
				}
				if (strlen($player2)  <= 3) {
						echo "El player 2 tiene menos de 3 caracteres <br>";
						$errores = true;
				}
				if ($ncartas != 7 && $ncartas != 10) {
						echo "El numero de cartas tiene que ser 7 ó 10 <br>";
						$errores= true;
				}
				if ($ncartas_part < 2 || $ncartas_part > 5) {
						echo "El numero de cartas tiene que estar entre 2 y 5 <br>";
						$errores= true;
				}
				if ($total <= 0) {
						echo "El total de cartas tiene que ser mayor que 0 <br>";
						$errores= true;
				}
				if ($euros <= 0) {
						echo "Los euros tienen que ser mayores que 0 <br>";
						$errores= true;
				}
				if ($presup <= 0) {
						echo "Los euros tienen que ser mayores que 0 <br>";
						$errores= true;
				}

			} //ENDIF Isset($_POST[enviar])


			if(isset($_POST['enviar']) && $errores==false){
        //Aquí se llama a la aplicación en caso de que el formulario esté bien.

				/*----------APLICACIÓN-----------*/
        $config = array('player1' => $player1,
                       'player2' => $player2,
                       'ncartas' => $ncartas,
                       'ncartas_part' => $ncartas_part,
                       'total' => $total,
                       'euros' => $euros,
                       'presupj1' => $presup,
                       'presupj2' => $presup,);

				session_start();
				if ( !isset( $_SESSION['nombre_juego'] )){ // No está acreditado
					$_SESSION['nombre_juego']= $nombre_juego;
					$_SESSION['config']= $config;
				}

				if (isset( $_SESSION['nombre_juego'])) {
					header('Location: juego.php');
          //Para que no siga ejecutando código de esta página
          exit();
				}

			} //Endif ISSET && ERRORES (Segunda o primera vez que se envía el formulario)

      else{ //A partir de aquí está el Formulario

        /*Dentro de cada uno de los input, hacemos una comprobación en caso
        de que se haya enviado, y si se ha enviado anteriormente se hace un echo
        con el valor de la variable. De esta forma, al reenviar en formulario no se pierden los
        datos*/

		?>
				<h1>Parámetros del juego.</h1>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

					<label for="id_texto">Nombre del juego : </label>
					<input type="text" name="nombre_juego" id="id_nombre_juego" value="<?php
					if(isset($_POST['nombre_juego'])){ echo $_POST['nombre_juego'];} ?>"/><br/>

					<label for="id_player1">Player1 : </label>
					<input type="text" name="player1" id="id_player1" value="<?php
          if(isset($_POST['player1'])){ echo $_POST['player1'];} ?>"/><br/>

          <label for="id_player2">Player2 : </label>
          <input type="text" name="player2" id="id_player2" value="<?php
          if(isset($_POST['player2'])){ echo $_POST['player2'];} ?>"/><br/>

          <label for="id_ncartas">Numero de cartas por palo : </label>
          <input type="text" name="ncartas" id="id_ncartas" value="<?php
          if(isset($_POST['ncartas'])){ echo $_POST['ncartas'];} else echo "10"; ?>"/><br/>

          <label for="id_ncartas_part">Numero de cartas por partida : </label>
          <input type="text" name="ncartas_part" id="id_ncartas_part" value="<?php
          if(isset($_POST['ncartas_part'])){ echo $_POST['ncartas_part'];} else echo "3"; ?>"/><br/>

          <label for="id_total">Total : </label>
          <input type="text" name="total" id="id_total" value="<?php
          if(isset($_POST['total'])){ echo $_POST['total'];} else echo "15"; ?>"/><br/>

          <label for="id_euros">Euros : </label>
          <input type="text" name="euros" id="id_euros" value="<?php
          if(isset($_POST['euros'])){ echo $_POST['euros'];} else echo "5";?>"/><br/>

          <label for="id_presup">Presupuesto : </label>
          <input type="text" name="presup" id="id_presup" value="<?php
          if(isset($_POST['presup'])){ echo $_POST['presup'];}?>"/><br/>


					<input name ="enviar" type="submit" value="Enviar"/>

				</form>
		<?php

  } //Endelse
		?>
	</body>
</html>
