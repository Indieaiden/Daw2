document.addEventListener("readystatechange",cargareventos,false);//imprescindible

function cargareventos(){
  alert(document.readyState);
  document.getElementsByTagName("p")[0].addEventListener("click",fnClick,false);
}

function fnClick(){
  if(document.getElementsByTagName("p")[1].style.display=="block"){
    document.getElementsByTagName("p")[1].style.display="none";
  }else if (document.getElementsByTagName("p")[1].style.display=="none") {
    document.getElementsByTagName("p")[1].style.display="block";
  }
}
