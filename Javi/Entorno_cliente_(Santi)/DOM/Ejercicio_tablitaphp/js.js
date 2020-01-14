function cargareventos(){
  alert(document.readyState);
  if (document.readyState=="interactive") {
    document.getElementById("guardar").addEventListener("click",guardaCookie,false);//escucha el boton guardar para hacer la funcion
    document.getElementById("submit").addEventListener("click",validar,false);//escucha el boton submit para hacer la funcion correspondiente
    rellenarFormulario();
  }
}
