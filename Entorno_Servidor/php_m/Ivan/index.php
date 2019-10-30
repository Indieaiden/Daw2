<?php
include './inc/header.php';
session_start();

function filtrado($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

if (!isset($_POST['aceptar'])) {
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nombre jugador1:
        <input type="text" name="Jugador1" required="required">
        <br><br>
        Nombre jugador2:
        <input type="text" name="Jugador2" required="required">
        <br><br>
        Ficha para jugador1:
        <select name="ficha">
            <option value="primer" selected="selected">circulo</option>
            <option value="segun">cruz</option>
        </select>
        <br><br>
        <input type="submit" name="aceptar" value="aceptar">

    </form>

    <?php
} else {
    $Jugador1 = filtrado($_REQUEST['Jugador1']);
    $Jugador2 = filtrado($_REQUEST['Jugador2']);
    $Ficha = filtrado($_REQUEST['ficha']);
    $_SESSION['Jugador1']=$Jugador1;
    $_SESSION['Jugador2']=$Jugador2;
    $_SESSION['ficha']=$Ficha;
    $_SESSION['gana'] = FALSE;
    header('Location: juego.php');
}

include './inc/fooder.php';
?>