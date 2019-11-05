/*Cookie llamada contador, que va a contar el numero de visitas de la pagina y que se reinicializara si pasan tres minutos
entre bodys le ponemos un titulo "ejercicio sobre cookies" y un parramo en el medio, y a los tres segundos el title
se cambiará "Esta es su visita numero: " y el numero de la cookie */




function createCookie(){
	var count=1;
	var fecha=new Date();
	fecha.setTime(fecha.getTime()+5*1000);
	document.cookie = "contador="+count+"; expires="+fecha.toUTCString()+"; miliseconds="+fecha.getTime();
}




function visitas(){
	var separador1 = new RegExp ("; ","g");
	var separador2 = new RegExp ("=","g");
	var cookies=document.cookie.split(separador1);
	var cookie = cookies[0].split(separador2);
	cookie[1]++;
	
	var fecha=new Date();
	fecha.setTime(fecha.getTime()+5*1000);
	document.cookie= "contador="+parseInt(cookie[1])+"; expires="+fecha.toUTCString();
}

if(document.cookie.length==0){
	createCookie();
}else {
	visitas();
}
document.write (document.cookie);
