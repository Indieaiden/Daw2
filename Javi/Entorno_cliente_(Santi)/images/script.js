function cambiaImagenes(){ //meter la imagen en un array
  var imagenes = ("0.jpg","1.jpg","3.gif","3.jpg");
 var rand = Math.floor(Math.random()*3);
 document.images["imagen"].src = imagenes[rand];
  }
}
setInterval("ambiaImagenes()",2000){
}
