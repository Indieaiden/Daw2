<?php
// ---------------------------------------- acreditacion.php ----------------------------------
session_start();
if ( !isset( $_SESSION['permiso'] )){ // No está acreditado
	if ( isset($_REQUEST['name']) && isset($_REQUEST['key'])) { // se reciben datos
		if( $_REQUEST['name']=='daw' && $_REQUEST['key']='secreto') { // Son correctas las credenciales
		$_SESSION['permiso']=$_REQUEST['name'];
		header('Location: informacion.php?'.SID);
		} else { //No son correctas las credenciales
			header('Location: acreditacion.php');
		}
	} else { // No ha rellenado el formulario
		echo '<form action="acreditacion.php" method="POST">';
		echo 'Nombre: <input type="text" id="id_name" name="name"/><br />' ;
		echo 'Clave : <input type="password" id="id_key" name="key"/><br />';
		echo '<input type="submit" value="Entrar"/>';
		echo '</form>';
	}
} else { //Sí está ya acreditado
	header('Location: informacion.php');
}
?>