
// --------- Declaracion de funciones
function Tramo (pDescripcion, pDistancia, pTiempo) {
  this.descripcion = pDescripcion;
  this.distancia = pDistancia;
  this.tiempo = pTiempo;
  //-----Métodos
  this.velocidad = velocidad;
}

function velocidad() {
  return this.distancia/(this.tiempo/60);
}

// Objeto 2
function Viaje (pDestino, pSalida) {
  this.destino = pDestino;
  this.salida = pSalida;
  this.tramos = new Array();
  //--Métodos
  this.duracion = duracion;
  this.kmts = kmts;
  this.llegada = llegada;
  this.media = media;

}


function duracion () {
  var tiempo = 0;
  for (e of this.tramos) {
    tiempo = tiempo + 30 + e.tiempo;
  }
  //Le quitamos el descanso del tramo final
  return tiempo-30;
}

function kmts () {
  var kms = 0;
  for (e of this.tramos) {
    kms += e.distancia;
  }
  //Le quitamos el descanso del tramo final
  return kms;
}

function llegada(){
  var inicio = this.salida.getTime();
  var min_durac = this.duracion();
  var ms_durac = mindurac*60*1000;
  var llegada = new Date();
  llegada.setTime(ms_durac+inicio);
  return .toUTCString();
}

function media(){
  var sum_veloc;
  for (e of this.tramos) {
    sum_veloc += e.velocidad();
  }
  return (sum_veloc/this.tramos.length);
}


// Objeto 3
function Vehiculo (pMatricula, pModelo, pAdquisicion, pt_autonomia, pkm_autonomia) {
  this.matricula = pMatricula;
  this.modelo = pModelo;
  this.adquisicion = pAdquisicion;
  this.t_autonomia = pt_autonomia;
  this.km_autonomia = pkm_autonomia;
  this.viajes = new Array();
  //--- Metodos
  this.horas = horas;
  this.kmts = kmts;
}

  function horas() {
    var veloc;
    for (e of this.viajes) {
      veloc += e.media();
    }
    
  }

  function kmts() {
    var kilom;
    for (e of this.viajes) {
      kilom += e.kmts();
    }
    return kilom;
  }
// -------------------- Main

//
