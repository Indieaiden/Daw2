function guardar_cookie(){
	var nombre=prompt("Introduce el nombre de la cookie","nombre cookie");
	if (window.localStorage.getItem(nombre)===null){
		var valor=prompt("Introduce el valor de la cookie "+nombre,"valor");
		window.localStorage.setItem(nombre,valor);
	}else{
		alert("La cookie "+nombre+" ya exsiste");
	}
	
	/*if(leer_cookie(nombre)===null){
		
		var valor=prompt("Introduce el valor de la cookie "+nombre,"valor");
		var segundos=parseInt(prompt("Introduce los segundos que tarda "+nombre+" en caducar","120"));
		var caducidad= new Date();
		caducidad.setTime(caducidad.getTime()+(segundos*1000));
		asignarCookie(nombre,valor,caducidad);
	}else{
		alert("La cookie "+nombre+" ya exsiste");
	}*/
}

function borrar_cookie(){
	var nombre=prompt("Introduce el nombre de la cookie","nombre cookie");
	if (window.localStorage.getItem(nombre)===null){
		
		alert("La cookie "+nombre+" ya exsiste");
	}else{
		
		window.localStorage.removeItem(nombre,valor)
	}
	/*if(leer_cookie(nombre)===null){
		alert("La cookie "+nombre+" no exsiste");
	}else{
		var caducada=new Date(1);
		asignarCookie(nombre,0,caducada);
	}*/
}

function modificar_cookie(){
	var nombre=prompt("Introduce el nombre de la cookie","nombre cookie");
	
	/*if(leer_cookie(nombre)===null){
		alert("La cookie "+nombre+" no exsiste");
	}else{
		var valor=prompt("Introduce el valor de la cookie "+nombre,"valor");
		var segundos=parseInt(prompt("Introduce los segundos que tarda "+nombre+" en caducar","120"));
		var caducidad= new Date();
		caducidad.setTime(caducidad.getTime()+(segundos*1000));
		asignarCookie(nombre,valor,caducidad);
	}*/

}

function consultar_cookie(){
	var nombre=prompt("Introduce el nombre de la cookie","nombre cookie");
	/*if(leer_cookie(nombre)===null){
		alert("La cookie "+nombre+" no exsiste");
	}else{
		alert(leer_cookie(nombre));
	}*/
}

function listado_cookies(){
	if(document.cookie.length ==0){
		alert("No hay cookies, se va a morir el monstruo de las galletas");
	}else{
		var cadena="";
		var sep1= new RegExp("; ","g");
		var sep2= new RegExp("=","g");
		/*var listaCookies = document.cookie.split(sep1); //Esto te separa [0]= NOMBRE1=VALOR1 [1]=NOMBRE2=VALOR2
		for(var i=0;i<listaCookies.length; i++){
		var cookie= listaCookies[i].split(sep2);
		cadena=cadena+"Nombre: "+cookie[0]+" Valor: "+cookie[1]+"\n";
		}
	alert(cadena);*/
	}
}