//Programa que pida nombre de la cookie , valor de la cookie y numero de segundos que tiene que tener de duracion


var nombre= prompt("Escribe un nombre para la cookie");
var valor= prompt("Escribe un valor para la cookie");
var tiempo= parseInt(prompt("En cuanto segundos quieres que expire la cookie"));
var fecha=new Date();
fecha.setTime(fecha.getTime()+tiempo*1000);
document.cookie = nombre+"="+valor+"; "+"expires= "+fecha.toUTCString();