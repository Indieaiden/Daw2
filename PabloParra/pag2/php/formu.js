
/*PARA QUITAR ONCLICK ETC ETC DEL HTML*/
document.addEventListener("readystatechange", cargarEventos, false);

function cargarEventos(evento){
	alert(document.readyState);
	if(document.readyState=="complete"){
		document.getElementById("enviar").addEventListener("click", guarda, false);
		document.getElementById("enviar").addEventListener("click", valida, false);
		document.getElementByName("productos").addEventListener("onchange", valida_Lista, false);
		if(valida()){
			carga();
		}
	}
	
}
function valida(){
	var valid=true;
	if(leer_cookie("nombre")==null){
		valid=false;
	}
	if(leer_cookie("sexo")==null){
		valid=false;
	}
	var checkeados=0;
	if(leer_cookie("mvp")!=null){
		for(var i=0;i<leer_cookie("mvp").length;i++){
			if(leer_cookie("mvp")[i]=="1"){
				checkeados+=1;
			}
		}
	}
	
	if(leer_cookie("mvp")==false || checkeados <2 || checkeados > 3 ){
		valid=false;
	}
	return valid;
}

function valida_Lista(){
	var seleccionados=0;
	for(var i=0; i<document.formul.productos.length;i++){
		if(document.formul.productos[i].selected){
			alert(document.formul.productos[i].value);
		}
	}
}  

function guarda(){
	var fecha= new Date();
	fecha.setTime(fecha.getTime()+(60*1000));
	
	var indice=0;
	var cadena=0;
	
	/*******GUARDAR NOMBRE********/
	var nombre= document.formul.nombre.value;
	if(nombre.length!=0){
		asignarCookie("nombre",nombre,fecha);
	}
	
	/*******GUARDAR SEXO*********/
	var sexo=document.formul.sexo.value;
	if(sexo.length!=0){
		asignarCookie("sexo",sexo,fecha);
	}
	/********GUARDAR MVP*********/
	var checkeados="";
	for(var i=0;i<document.formul.mvp.length;i++){
		//alert(document.formul.mvp[i].checked);
		if(document.formul.mvp[i].checked){
			checkeados+="1";
		}else{
			checkeados+="0";
		}
	}
	
	//alert(checkeados);
	if(checkeados.indexOf("1")!=-1){
		asignarCookie("mvp",checkeados,fecha);
	}
	
	
}

function carga(){
	/********CARGAR NOMBRE******/
	if(leer_cookie("nombre")!=null){
		var valor_nombre= leer_cookie("nombre");
		document.formul.nombre.value=valor_nombre;
	}

	
	/********CARGAR SEXO*********/
	if(leer_cookie("sexo")!=null){
		var valor_sexo= leer_cookie("sexo");
		for(var i=0; i<document.formul.sexo.length;i++){
			/*alert(document.formul.sexo[i].value);
			alert(valor_sexo);*/
			if(document.formul.sexo[i].value==valor_sexo){
				document.formul.sexo[i].checked="chequed";
			}

		}
	
	}
	
	/*********CARGAR MVP***********/
	if(leer_cookie("sexo")!=null){
		var valor_mvp=leer_cookie("mvp");
		for(var i=0;i<document.formul.mvp.length;i++){
			if(valor_mvp.charAt(i)==1){
				document.formul.mvp[i].checked="chequed";
			}
		}
	}
	
	
}
