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
  alert(document.readyState);
  if (document.readyState=="interactive") {
    //document.getElementById("form1").addEventListener("readystatechange",leerCookie,false);
    document.getElementsByName("guardarForm").addEventListener("click",guardaCookie,false);//escucha el boton guardar para hacer la funcion
    //document.getElementById("submit").addEventListener("click",validar,false);//escucha el boton submit para hacer la funcion correspondiente
    document.getElementsByName("mascota").addEventListener("click",validarlista,false);
    rellenarFormulario();
  }
}
function validarlista(lista){
  //lista.form.mascota
  if (lista.options[lista.setectedIndex].value=="0") {
    alert ("Perrete!");
  }
}

function guardaCookie(){ //meter las datos en un acookie

  alert (aficiones);
  alert (sexo);
//  document.cookie="sexo="+sexo;
//  document.cookie="aficiones"=aficiones;

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
