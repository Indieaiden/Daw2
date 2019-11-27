function asignarCookie(nombre,valor,caducidad){
	document.cookie=nombre+"="+escape(valor)+((caducidad ==undefined) ? "" : ("; expires="+ caducidad.toUTCString()));
}
function leer_cookie(nombre){
	if (document.cookie.length == 0) return null;
	var sep1= new RegExp("; ","g");
	var sep2= new RegExp("=","g");
	var listaCookies = document.cookie.split(sep1);
	for(var i=0;i<listaCookies.length; i++){
		var cookie= listaCookies[i].split(sep2);
		if (cookie[0]==nombre) return cookie[1];
	}
	return null;
}