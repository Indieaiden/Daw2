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
  var inic = document.getElementsByName("init")[0].value;
  var fin = document.getElementsByName("end")[0].value;
  var parcialUrl = '?init='+inic+'&end='+fin+'';
  peticion = new XMLHttpRequest();//objeto XML Html Request
  peticion.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      //alert("Funchiona!");
      alert(this.responseText);
      document.getElementById("datos").innerHTML = this.responseText;//esta linea, añade el fichero llamado en la funcion open(x,x,x);
      evento.target.disabled = true;
    }
  };
  peticion.open("GET","./ajax.php"+parcialUrl,true);//llamamos al archivo ( Metodo , URL-del-Archivo , true)
  peticion.send(null);//mete el archivo
}
