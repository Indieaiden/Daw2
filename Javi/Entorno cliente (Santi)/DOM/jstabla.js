document.addEventListener("readystatechange",cargareventos,false);//imprescindible

function cargareventos(){
  alert(document.readyState);

  if (document.readyState=="interactive") {
    document.getElementById("crear").addEventListener("click",aniadefila,false);//escucha el boton guardar para hacer la funcion
  }

  function aniadefila(){
    var filas = parseInt(prompt("numero de filas que quieres añadir",2));
    var columnas = parseInt(prompt("numero de columnas que quieres añadir",2));
    var tabla = new array();
    for (var i = 0; i < filas; i++) {
      tabla[i]=new array()
      for (var c = 0; i < columna; c++) {
        tabla[i][c]= prompt("contenido de "+i+" - "+c);
      }
    }

    //Creacion de la tabla
    var vartabla = document.getElementsByTagName("table")[0];
    
  }
}
