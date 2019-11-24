
var tiempo;
var fecha;

function ponerCookie() {
    var nombre = prompt("Escribe un nombre para la cookie");
    var valor = prompt("Escribe el valor de la cookie");
    tiempo = parseInt(prompt("Expiracion de la cookie"));
    fecha = new Date();
    //Se multiplica por 1000 para ponerlo en segundos
    fecha.setTime(fecha.getTime()+tiempo*1000);
    document.cookie = nombre+"="+valor+"; expires= "+fecha.toUTCString();
}

function encuentraCookie(nombre){
  var separador1 = new RegExp("; ", "g");
  var separador2 = new RegExp("=", "g");9
  var foo = false;
  //Creamos un array de cookies separadas o algo así
  var cookies = document.cookie.split(separador1);
  for (var i=0; i<cookies.length; i++){
      var cookie = cookies[i].split(separador2);
      if (cookie[0]==nombre) {
        foo=true;
      }
  }
  return foo;
}

function actualizarCookie() {

}

function listarCookies() {

}

function borrarCookie() {
  //Esta función pone la fecha de caducidad
  //de la cookie en una fecha anterior a la actualizarCookie

}

function borrarTodo() {
  //Esta función pone la fecha de caducidad
  //de la cookie en una fecha anterior a la actualizarCookie

}
