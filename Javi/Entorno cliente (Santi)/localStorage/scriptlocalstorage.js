function escribeCookie(){
  //cookie con 3 valores
  //escribimos en document.cookie, rcordamos que los obligatorios son nombre y valor el resto se pueden guadar como opcionales.
  var nombre = toLowerCase(prompt("nombre de cookie"));
  var valor = prompt("valor de cookie");
  var caducidad = prompt("cuando quieres que caduque");
  document.cookie = nombre+" = "+valor+((caducidad==undefined)?"":caducidad.toGMTString);
}
function borrarCookie(){

}
function modificarCookie(){

}
function leerCookie(){//lee una cookie pasada por prompt
  var nombre = prompt("Cookie a leer?");
  if (document.cookie.length==0) {
    //no hay cookies
  }
  //si hay cookies registradas
  var exp1 = new RegExp("; ","g");//expresion regular para separar cookies
  var cukis = document.cookie.split(exp1);
}
function muestraTodasCookie(){
  var miscookies =
  }
}
