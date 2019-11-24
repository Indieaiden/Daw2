/*Con esto se cargan los eventos, se añade un listener en el readystatechange*/
document.addEventListener('readystatechange',cargar_eventos,false);

function cargar_eventos() {
  if(document.readyState == "interactive"){
    document.getElementById("guardar").addEventListener("click",guardar,false);
    document.getElementById("enviar").addEventListener("click",enviar,false);
  }
}

function guardarCookie(nombre, valor, caducidad) {
    //Cogemos la cookie y le asignamos el valor, la caducidad, y el nombre. Para esto utilizamos el document.Cookie
    //necesitamos un if por si acaso la caducidad ya está definida, para sobreescribirla
    document.cookie = nombre+"="+escape(valor)+((caducidad==undefined)?"":("; expires="+caducidad.toUTCString()));
  }

function leerCookie(nombre) {
  if (document.cookie.length==0) return null;
  var trozo1 = new RegExp("; ", "g");
  var trozo2 = new RegExp("=", "g");
  var listaCookie=document.cookie.split(trozo1);

  for (var i=0; i<listaCookie.length; i++) {
    var cookie = listaCookie[i].split(trozo2);

      if(cookie[0] == nombre){
        return cookie[1];
      }
      else return null;
  }
}


function guardar(){
  var texto = document.forms["formulario"].elements["nombre"];
  var radio = document.forms["formulario"].elements["pago"];
  var checkbox = document.forms["formulario"].elements["regalos"];
  var cadena = "";

  // alert(texto.value);
  guardarCookie("texto", texto.value);
  // alert(radio.value);
  guardarCookie("radio", radio.value);

  for (var i = 0; i < checkbox.length; i++) {
    if (checkbox[i].checked) {
    // alert(checkbox[i].value);
    cadena = cadena+i;
    }
  }

  guardarCookie("checkbox", cadena);

  // alert("Guardar ok");
}

function validar(miForm){

alert("Validar ok");
return true;
}

function enviar() {
  alert("Enviar ok");
  var miForm = document.formulario;
  var validado = validar(miForm);

  if (validado) {
    miForm.submit();
  }
  else {
    alert("Error de formulario");
  }
}



/*
Formulario dos botones uno guardar y otro enviar
Cuando guardas se guarda en cookies lo que está escrito en el formulario.
Cuando das ea enviar, antes de enviar los datos al servidor, tiene que checkear
(Tiene que estar activado uno de los radios, los checkbox tiene que ser dos o tres)
y además cuando se cargue la página, se tienen que leer las cookies y dejarte lo mismo
que había cuando se dio a guardar.

*/

/*
Programa, cuando se carga la página, cargar las cookies
cuando se haga click en el submit, guardar las cookies
cuando se haga click en comprobar
  - si está bien enviar los datos
  si no está bien mostrar error

Guardar las cookies
Grabar_cookie("caja", document.bla.textbox.value, fecha)
indice = 0;
bucle for de tal forma que:
Para i=0 hasta document.gormulario elements[edad]
si el elemento i está checkeado indice = i

Finsi
finpara
grabarcookie (edad, indice, fecha);

cadena = ""
Para i =0 hasta ...
si el elemento[i] esta checked
  cadena  += "s";
  sino
  cadena += "N"
  Finsi
  finpara

Grabar_cookie("chekbox", cadena, fecha);
*/

/*
Dos posibilidades para checkear
Uno teniendo un input tipo submit.
Quedaría algo con esta forma más o menos

<form ... onsubmit="return validar()">
    ...
  <input type= "submit"...>
</form>
Esto el problema que tiene es que son eventos dentro de HTML, y hay
que intentar quitar los eventos en HTML.

Otra opcion: function enviar() {
Primero todas las comprobaciones y luego

document.formulario.submit();
}
*/
