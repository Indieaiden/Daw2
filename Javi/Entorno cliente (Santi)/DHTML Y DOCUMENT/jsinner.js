document.addEventListener("readystatechange",cargareventos,false);//imprescindible

function cargareventos(){
  alert(document.readyState);
  document.getElementById("botonP").addEventListener("click",fnClick,false);
  document.getElementById("botonF").addEventListener("click",fnBack,false);
}
var cont =0;

function fnClick(){
  var algo = prompt("Escribealgo","algo");

  document.getElementsByTagName("p")[0].innerHTML = "<strong>"+algo+"</strong>";

}
function fnBack(){
  if(document.getElementsByTagName("p")[0].className=="verde"){
    document.getElementsByTagName("p")[0].className="azul";
  }else if (document.getElementsByTagName("p")[0].className=="azul") {
    document.getElementsByTagName("p")[0].className="verde";
  }
}
