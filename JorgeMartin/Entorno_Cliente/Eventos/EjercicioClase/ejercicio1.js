
document.addEventListener("readystatechange", cargarEventos, false);

function cargarEventos (evento) {
//if //Solo si esta en el estado de finalizado
  if (document.readyState == "interactive"){
  //alert (document.readyState);
  var elem;
elem = document.getElementById("but");
elem.addEventListener("click", funcionbot, true);

}//Endif
}

function funcionbot(){}
