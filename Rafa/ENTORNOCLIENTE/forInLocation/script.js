document.write("Propiedades del window.location");

for(var var1 in window.location){
	document.write(var1 + "=>"+window.location[var1]+"<br>");
}