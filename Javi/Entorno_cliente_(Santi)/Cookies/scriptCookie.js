function escribeCookie(){
  //cookie con 3 valores
  //escribimos en document.cookie, rcordamos que los obligatorios son nombre y valor el resto se pueden guadar como opcionales.
  var nombre = toLowerCase(prompt("nombre de cookie"));
  var valor = prompt("valor de cookie");
  var caducidad = prompt("cuando quieres que caduque");
  document.cookie = nombre+" = "+valor+((caducidad==undefined)?"":("; expires="+caducidad.toGMTString));
}
function borrarCookie(){
  var busq = toLowerCase(prompt("nombre de cookie"));
  var miscookies = document.cookie.split(";");
  for (var i = 0; i < miscookies.length; i++) {
    if (miscookies[i]==busq) {

    }
  }
}
function modificarCookie(){

}
function leerCookie(){//lee una cookie pasada por prompt
  var nombre = prompt("Cookie a leer?");
  if (document.cookie.length==0) {
    //no hay cookies
    alert("No hay ccokies en esta pagina");
  }
  //si hay cookies registradas
  var exp1 = new RegExp("; ","g");//expresion regular para separar cookies
  var exp2 = new RegExp("= ","g");//expresion regular para mostrar las cookies
  var cukis = document.cookie.split(exp1);
  for (var i = 0; i < cukis.length; i++) {
    cukita = cukis[i].split(exp2);
    if (cukita == nombre) {
      alert(cukis[i]);
    }
  }
}
function muestraTodasCookie(){
  var miscookies = document.cookie.split(";");
  for (var i = 0; i < miscookies.length; i++) {
    alert(i+" - "+miscookies[i]*"\n");
  }
}
}
