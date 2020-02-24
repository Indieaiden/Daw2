//variable gloval
var peticion;
//controlador de eventos
document.addEventListener("readystatechange",cargaEventoss,false);//imprescindible

function cargaEventoss(){
  if (document.readyState == "interactive") {
    alert("interactive");
    document.getElementById("enviarRecibir").addEventListener("click",enviarRecibir,false);
  }
}
function enviarRecibir(evento){
  var miObjeto = new Object();
  miObjeto.inic = document.getElementsByName("init")[0].value;
  miObjeto.fin = document.getElementsByName("end")[0].value;
  var jsonurl = JSON.stringify(miObjeto);
  peticion = new XMLHttpRequest();//objeto XML Html Request
  peticion.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      //alert("Funchiona!");
      document.getElementById("datos").innerHTML = this.responseText;//esta linea, añade el fichero llamado en la funcion open(x,x,x);
      evento.target.disabled = true;
    }
  };
  peticion.open("GET","./ajax.php?yeison="+jsonurl,true);//llamamos al archivo ( Metodo , URL-del-Archivo , true)
  peticion.send(null);//mete el archivo
}
