<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /**
       *
       */
      interface Leible
      {
        // code...
        public function pasarPagina();
        public function retrocederPagina();
        public function volverInicio();
      }

      /**
       *
       */
      class Manga implements Leible
      {
        public $paginas;
        public $numPaginas;
        public $paginaActual;

        function __construct($paginas)
        {
          $this->paginas = $paginas;
          $this->numPaginas = sizeof($paginas);
          $this->paginaActual = $this->numPaginas;
        }

        public function pasarPagina()
        {
          $this->paginaActual--;
        }

        public function retrocederPagina()
        {
          $this->paginaActual++;
        }

        public function volverInicio()
        {
          $this->paginaActual = $this->numPaginas-1;
        }
      }

      /**
       *
       */
      class Libro implements Leible
      {
        public $paginas;
        public $numPaginas;
        public $paginaActual;

        function __construct($paginas)
        {
          $this->paginas = $paginas;
          $this->numPaginas = sizeof($paginas);
          $this->paginaActual = 0;
        }

        public function pasarPagina()
        {
          $this->paginaActual++;
        }

        public function retrocederPagina()
        {
          $this->paginaActual--;
        }

        public function volverInicio()
        {
          $this->paginaActual = 0;
        }
      }
     ?>

     <?php
     $array = array("Uno", "Dos", "Tres", "Cuatro", "Cinco");
     $yakusoku = new Manga($array);
     $tiempo_costuras = new Libro($array);

     $yakusoku->pasarPagina();
     print($yakusoku->paginas[$yakusoku->paginaActual]);
     echo "<br>";
     $yakusoku->pasarPagina();
     print($yakusoku->paginas[$yakusoku->paginaActual]);
     echo "<br>";
     $yakusoku->pasarPagina();
     print($yakusoku->paginas[$yakusoku->paginaActual]);
     echo "<br>";
     $yakusoku->pasarPagina();
     print($yakusoku->paginas[$yakusoku->paginaActual]);
     echo "<br>";
     $yakusoku->retrocederPagina();
     print($yakusoku->paginas[$yakusoku->paginaActual]);
     echo "<br>";
     $yakusoku->volverInicio();
     print($yakusoku->paginas[$yakusoku->paginaActual]);
     echo "<br>";

     echo "<br>";

     $tiempo_costuras->pasarPagina();
     print($tiempo_costuras->paginas[$tiempo_costuras->paginaActual]);
     echo "<br>";
     $tiempo_costuras->pasarPagina();
     print($tiempo_costuras->paginas[$tiempo_costuras->paginaActual]);
     echo "<br>";
     $tiempo_costuras->pasarPagina();

     print($tiempo_costuras->paginas[$tiempo_costuras->paginaActual]);
     echo "<br>";
      ?>
  </body>
</html>
