<?php include_once "header.php" ?>
<?php

if (!$fp = fopen("log.log", "a")){
  echo "No se ha podido abrir el archivo";
}

  function addLog ($fp) {
        $time = time();
        //Salto de línea PHP_EOL DONE
        fwrite($fp, PHP_EOL);
        fwrite($fp, __FUNCTION__ . " -- ");
        //Usar funciones mágicas DONE
        fwrite($fp, __FILE__." -- ");
        //Ponerle también la fecha DONE
        fwrite ($fp, date("d-M-Y (H:i:s)", $time));
  }

  addLog($fp);

  fclose($fp);
  ?>
<?php include_once "footer.php" ?>
