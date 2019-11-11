document.addEventListener("readystatechange",eventoss,false);//imprescindible
//lo de arriba hace que la pagina este a la escucha de eventos de la funcion que le pasemos
var rand = 0;//variable que
function eventoss(){
  alert(document.readyState);

  document.getElementById("im").addEventListener("click",cambiaImagenes,false);
  document.getElementById("bt").addEventListener("click",cambiaImagenes,false);
  document.getElementById("p1").addEventListener("dblclick",cambiaImagenes,false);
  document.getElementById("p2").addEventListener("mouseover",cambiaImagenes,false);
  document.getElementById("p3").addEventListener("mousedown",hazinterval,false);
  document.getElementById("p3").addEventListener("mouseup",borrainterval,false);
}
function cambiaImagenes(){ //meter la imagen en un array
  var imagenes = ["./imagenes/0.jpg","./imagenes/1.jpg","./imagenes/3.gif","./imagenes/3.jpg"];
  if (rand>2) {
    rand=0;
  }else{
    rand++;
  }
  document.images["imagen"].src = imagenes[rand];
}
var intervalo;
function hazinterval(){
    intervalo=setInterval("cambiaImagenes()",300);
}
function borrainterval(){
  clearInterval(intervalo);
}
