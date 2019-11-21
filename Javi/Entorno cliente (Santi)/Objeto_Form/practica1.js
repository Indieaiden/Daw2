/*
eventos:
  Cuando se carga la página -> cargar las cookies
  Cuando se clicque en boton guardar -> que guarde cookie con los datos
  Cuando se haga clic en enviar -> comprobar:
    si esta bien
      Enviar datos
    si note
      Mostrar error
    fin
*/
document.addEventListener("readystatechange",cargareventos,false);//imprescindible
//lo de arriba hace que la pagina este a la escucha de eventos de la funcion que le pasemos

function cargareventos(){
  document.getElementById("form1").addEventListener("readystatechange",leerCookie,false);
  document.getElementById("guardar").addEventListener("onclick",guardaCookie,false);//escucha el boton guardar para hacer la funcion
  document.getElementById("submit").addEventListener("onclick",validar,false);//escucha el boton submit para hacer la funcion correspondiente
}

function guardaCookie(){ //meter las datos en un acookie
  var name = document.forms["formulario"]["nombre"].value; //adquiere el valor de la cja de texto
  var sexo = document.forms["formulario"]["sexo"].value;//adquiere el valor del radio seleccionado
  var aficion = new Array();//array que va a recoger el valor aficion
  var counteraf = 0;
  for (var i = 0; i < document.forms["formulario"].elements["aficiones"].length; i++) {
    if (document.forms["formulario"].elements["aficiones"][i].checked) {
      aficion[counteraf] = document.forms["formulario"].elements["aficiones"][i].value;
      counteraf++;
    }
  }
  for (var i = 0; i < aficion.length; i++) {
    alert(aficion[i]);
  }
}


function leerCookie(){

}

function validar(){
  //hacemos todas nuestras comprobaciones
  if (true) {
    document.forms["formulario"].submit();
  }else {
    //ERROR
  }
}
