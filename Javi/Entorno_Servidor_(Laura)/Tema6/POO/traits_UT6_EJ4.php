<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Traits</title>
</head>
<body>
  <?php
  trait TraitUno{
    public function imprimeAlgo(){echo "trait de ejemplo.<br>"; }//trait con funcion imprime
  }
  trait TraitDos{
    public function imprimeAlgo(){echo "trait de ejemplo numero dos.<br>"; }//trait con funcion similar al anterior
  }
  trait TraitTres{//trait con funciones adicionales
    public abstract function dePrueba();//metodo abstracto para usar mas adelante en otra funcion
    public static function restalgo($a, $b){ return $a-$b;}//metodo estatico para usar cuando queramos
  }
  class BaseCuatro{//Clase para poder lanzar un parent al TraitCuatro que reutilice su/s metodo/s
    public function alleVoy(){echo "Aqui vá un String.... ";}//Funcion publica en clase publica para 'heredar en el TraitCuatro'
  }
  trait TraitCuatro{//trait que va a tirar de los metodos de la lase BaseCuatro para utilizar en los sullos
    public function mergeando(){
        parent::alleVoy(); echo "Y ahora otro String<br>"; //Parent:: para llamar al metodo publico de BaseCuatro
    }
  }



  class Testeando extends BaseCuatro{ //clase que hereda de la creada anteriormente, y así Pueda mostrar bien el metodo del TraitCuatro
    use TraitUno,TraitDos,TraitTres,TraitCuatro{
      TraitUno::imprimeAlgo insteadof TraitDos;//definimos el metodo de TraitUno como principal
      TraitDos::imprimeAlgo as imprimedos;//Renombramos el metodo de TraitDos para poder utilizarlo y no liarnos también
    }
    public function dePrueba(){ echo "<br>¡Probando!<br>";}//Definimos el metodo estático de TraitTres
  }
  $test = new testeando;//instanciamos
  $test->imprimeAlgo();//aqui se utiliza el metodo de TraitUno
  $test->imprimedos();//aqui utilizamos el metodo de TraitDos renombrado
  $test->dePrueba();//aqui utilizamos el metodo dePrueba definido ya en la clase
  $test->mergeando();//
  echo testeando::restalgo(5,10);//aqui utilizamos el metodo estático definido en TraitTres



  ?>
</body>
</html>
