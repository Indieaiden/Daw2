<?php

    function pintarNumeros() {
        $complementario = random_int(1, 49);
            
        $numeros = [0,0,0,0,0];

        //Generar nuemros
        for($i=0; $i <= 5; $i++) {
            
            //Comprobar que el numero no este repetido
            foreach($numeros as $n) {
                $num = random_int(1, 49);
                if($num != $n) {
                    $numeros[$i] = $num;
                }
            }
        }

        sort($numeros);
        
        //Pintar numeros
        ?>

        Enhorabuena <?php echo $_POST['nombre'] ?><br>
        Su loto ganador es: <br>
        Numeros: <?php 
            foreach($numeros as $numero) {
                echo $numero . " "; 
            } 
        ?><br>
        Complementario: <?php echo $complementario ?><br>


        <?php

    }

    $errores = array();

    if(isset($_POST['enviar'])) {
        //Comprobar nombre
        if(strlen($_POST['nombre']) < 6) {
            array_push($errores, "El nombre debe tener al menos 6 caracteres");
        }

        $nombreCorrecto;
        preg_match('/^[a-zA-Z0-9_]+$/', $_POST['nombre'], $nombreCorrecto);

        if(empty($nombreCorrecto)) {
            array_push($errores, "El nombre puede tener una mayuscula, minuscula, numero y barra baja");
        }
        
        //Comprobar contraseña
        if(strlen($_POST['password']) < 10) {
            array_push($errores, "La contraseña debe tener al menos 10 caracteres");
        }

        $passwordCorrecta;
        preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!$%@#£€*?&]{10,}$/', $_POST['password'], $passwordCorrecta);

        if(empty($passwordCorrecta)) {
            array_push($errores, "La contraseña debe tener una mayuscula, minuscula, numero y caracter especial");
        }
        
        foreach($errores as $error) {
            echo $error . "<br>";
        }

        if(empty($errores)) {
            pintarNumeros();
        }

    }


?>