<?php
  $longitud = strlen($_GET['comment']);

  $aux = explode(' ', $_GET['comment']);
  $n_palabras = sizeof($aux);

  //Este metodo me mete un array con los valores más repetidos
  $aux2 = count_chars(str_replace(" ", '', $_GET['comment']));

  //Listo
  $letra_rep = array_search(max($aux2), $aux2);
  $letra_rep = chr(intval($letra_rep));



  $longitud = strlen($_GET['comment']);
 ?>

 <h1>Detalle: </h1>
 <p>Longitud: </p>
 <p style="border: 1px solid black;"> <?php echo $longitud; ?> </p>
 <br>
 <p>Numero de palabras: </p>
 <p style="border: 1px solid black;"> <?php echo $n_palabras; ?> </p>
 <br>
 <p>Letra más repetida: </p>
 <p style="border: 1px solid black;"> <?php echo $letra_rep; ?> </p>
 <br>
 <p>No sé, cosas: </p>
 <p style="border: 1px solid black;"> <?php echo $longitud ?> </p>
 <br>
