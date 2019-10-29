/*Poner en el título el número de visitas
que hacen a la página guardándolo en una cookie, y aumentando
en uno cada vez que se recargue*/

function asignarCookie(nombre, valor, caducidad) {
    //Cogemos la cookie y le asignamos el valor, la caducidad, y el nombre. Para esto utilizamos el document.Cookie
    //necesitamos un if por si acaso la caducidad ya está definida, para sobreescribirla
    document.cookie = nombre+"="+escape(valor)+((caducidad==undefined)?"":("; expires="+caducidad.toUTCString()));
  }

function leerCookie(nombre) {
  if (document.cookie.lenght==0) return null;
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

function cambiarTitulo() {
  document.title = "Visitas = " + leerCookie("contador");
}

function aumentarVisita() {
  var contadorActual = 0;
  var cad = new Date();
  cad.setTime(cad.getTime() + (0.1*60*1000));

  if (leerCookie("contador") == null){
    asignarCookie("contador", 1, cad);
  }

  contadorActual = leerCookie("contador");

  cambiarTitulo();

  contadorActual++;

  asignarCookie("contador", contadorActual, cad);

}
