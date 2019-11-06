function asignarCookie(nombre,valor,caducidad){
	document.cookie=nombre+"="+escape(valor)+
	((caducidad ==undefined) ? "" : ("; expires="+caducidad.toUTCString()));
	}
function leerCookie(nombre){
	if(document.cookie.length==0)return null;
	var trozo1 =new RegExp("; ","g");
	var trozo2 =new RegExp("=","g");
	var listaCookie=document.cookie.split(trozo1);
	for(var i=0;i<listaCookie.length;i++){
		var cookie=listaCookie[i].split(trozo2);
		if(cookie[0]==nombre){
		return cookie[1];
		}
	}return null;
}