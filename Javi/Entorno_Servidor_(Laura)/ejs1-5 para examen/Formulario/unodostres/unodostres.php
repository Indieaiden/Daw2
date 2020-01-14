<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Adrian Pavel">
        <title>Formulario</title>
    </head>
    <body>
<?php

function pintaFormulario() {

    $argumentos = 0;

    if(func_num_args() > 0) {
        $argumentos = func_get_arg(0);
    }
    
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="nombre">Nombre: </label><input type="text" name="nombre" <?php if(isset($argumentos['nombre'])) {echo "value = " . $argumentos['nombre'];} ?>> <br>
            <label for="contra">Contraseña: </label><input type="password" name="contra"> <br>

            <?php

                if(isset($argumentos['coches'])) {
                    $elem = 0;
                    $string;
                    for($i=0; $i < 3; $i++) {
                        if(isset($argumentos['coches'][$elem])){
                            $string = $argumentos['coches'][$elem];
                        }
                        if(trim($string, "coche") == $i + 1) {
                            ?>
                            <label>Coche <?php echo $i + 1 ?></label> <input type="checkbox" name="coches[]" value="coche<?php echo $i + 1 ?>" <?php echo 'checked' ?> > <br>
                            <?php
                            $elem++;
                        }else {
                            ?>
                            <label>Coche <?php echo $i + 1 ?></label> <input type="checkbox" name="coches[]" value="coche<?php echo $i + 1 ?>"> <br>
                            <?php
                        }
                    }
                }else {
                    ?>
                        <label>Coche 1</label><input type="checkbox" name="coches[]" value="coche1"><br>
                        <label>Coche 2</label><input type="checkbox" name="coches[]" value="coche2"><br>
                        <label>Coche 3</label><input type="checkbox" name="coches[]" value="coche3"><br>
                    <?php
                }
            ?>

            <select name="fruta">
                <option value="manzana" <?php if($argumentos['fruta'] == "manzana") { echo 'selected';} ?>>Manzana</option>
                <option value="pera" <?php if($argumentos['fruta'] == "pera") { echo 'selected';} ?> >Pera</option>
                <option value="platano" <?php if($argumentos['fruta'] == "platano") { echo 'selected';} ?> >Platano</option>
                <option value="naranja" <?php if($argumentos['fruta'] == "naranja") { echo 'selected';} ?> >Naranja</option>
            </select> <br>
            
                
            <label for="genero">Hombre</label><input type="radio" name="genero" value="hombre" <?php if($argumentos['genero'] == "hombre") { echo 'checked';} ?>> <br>
            <label for="genero">Mujer</label><input type="radio" name="genero" value="mujer" <?php if($argumentos['genero'] == "mujer") { echo 'checked';} ?>> <br>
            <label for="genero">Otro</label><input type="radio" name="genero" value="otro" <?php if($argumentos['genero'] == "otro") { echo 'checked';} ?>> <br>

            <input type="submit" name="enviado" value="Enviar">
        </form>
        <br>

    <?php
}


if(isset($_POST['enviado'])){
    
    $falta = array();
    $validado = true;

    foreach($_POST as $clave => $valor) {
        if(empty($_POST[$clave])){
            array_push($falta, $clave);
            $validado = false;
        }
    }

    if($validado){
        foreach($_POST as $clave => $valor) {
        
            if(is_array($_POST[$clave])) {
                echo $clave . " : ";
                foreach($_POST[$clave] as $c => $v) {
                    echo $v . ", ";
                }
                echo "<br>";
            }else {
                echo $clave . " = " . $valor . "<br>";
            }
        }
    }else {
        pintaFormulario($_POST);
        echo "Te ha faltado rellenar: ";
        echo implode(", ", $falta);
    }
    

}else {
    pintaFormulario();
}

?>
</body>
</html>
