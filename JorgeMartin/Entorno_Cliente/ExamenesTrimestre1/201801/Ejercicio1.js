
//  -------------------------------------- Examen 2018 1parte ejercicio 1
// - Definición objetos -
/*
• Pais				nombre del pais
• Precio_establecimiento	numérico con decimales en céntimos
• Precio_minuto			numérico con decimales en céntimos
*/
function Tarifa (pPais, pprecio, pminuto){
  this.pais = pPais;
  this.precio_establecimiento = pprecio;
  this.precio_minuto = pminuto;
}

/*
• Pais				nombre del país
• Fecha				objeto tipo Date con la fecha y hora de inicio de la llamada
• Telefono			número de teléfono. Tipo carácter
• Tiempo			numérico entero. Segundos que duró la llamada
*/

function Llamada(pPais, pFecha, pTelefono, pTiempo){
  this.pais = pPais;
  this.fecha = pFecha;
  this.telefono = pTelefono;
  this.tiempo = pTiempo;
}

/*
• Marca				marca y modelo
• Ancho				numérico entero con número de píxeles de ancho de la pantalla
• Alto				numérico entero con ,,, alto …
• Tarifas				tabla de objetos Tarifa
• Llamadas			tabla de objetos Llamadas
*/

function Movil(pMarca, pAncho, pAlto){
  this.marca = pMarca;
  this.ancho = pAncho;
  this.alto = pAlto;
  this.tarifas = new Array();
  this.llamadas = new Array();

  // ------------------- metodos

  this.resolucion = resolucion;
  this.importe_llamda = importe_llamda;
  this.pais_mas_llamado = pais_mas_llamado;
  this.llamada_mas_cara = llamada_mas_cara;
  this.pais_mas_llamado = pais_mas_llamado;
  this.ordenada = ordenada;
}

// - Definicion de funciones -

// devuelve el número de pixeles correspondientes al ancho x alto
function resolucion() {
  return this.ancho*this.alto;
}

/*recibe como parámetro un objeto Llamada y devuelve el
importe (coste del establecimiento + tiempo que dura por el
precio*/
function importe_llamada(pLlamada){
  var tarifa_act;
  //buscamos la tarifa que coincide con la llamada
  for (var aux of this.tarifas) {
    if (pLlamada.pais = aux) {
      tarifa_act = aux;
    }
  }
  return (tarifa_act.precio_establecimiento + pLlamada.tiempo * tarifa_act.precio_minuto;)
}

/*muestra (d.write) con un “for in” los nombres y valores de las
propiedades de la llamada más cara*/
function llamada_mas_cara(){
  var llamada_act = this.llamadas[0];
  var resultado = ``;
  for (e of this.llamadas) {
    if (importe_llamada(llamada_act) < importe_llamada(e)){
      llamada_act = e;
    }
  }
for (var prob in llamada_act) {
  if (llamada_act.hasOwnProperty(prob)) {
       resultado += `${llamada_act}.${prob} = ${llamada_act[prob]}\n`;
  }
  document.write(resultado);
}
}

//devuelve el nombre del país con más llamadas realizadas
function pais_mas_llamado(){}

//devuelve una tabla de objetos Llamada ordenada asc. por fecha
function ordenada(){}

/*muestra (d.write) una línea por cada llamada, ordenadas
ascendentemente por fecha con la fecha (aaaa-mm-dd : hh-
mm-ss), el número de teléfono, el tiempo y el importe de la
llamada.*/
function factura(){}


// ------------------MAIN-----------------

/*
• En primer lugar se introducirán las tarifas preguntando inicialmente cuantas se desea introducir. Se comprobará que el país no se ha introducido anteriormente.
• A continuación se introducirán las llamadas
preguntando después de cada una de ellas si se desean
más llamadas. Se comprobará que el país se ha introducido
en las tarifas. La fecha se solicitará con año, mes, día,
hora, minuto, segundo por separado y se comprobará:

• Que el mes se encuentra entre 1 y 12
• Que el día se encuentra entre 1 y 31.
• Que la hora se encuentra entre 0 y 23.
• Que los minutos se encuentran entre 0 y 59
• Que los segundos se encuentran entre 0 y 59
• Que la fecha es anterior a la del sistema

Si uno de los datos es erróneo se
volverá a solicitar el mismo.
Si la fecha no es anterior a la actual se volverá a pedir completa.

El número de teléfono podrá estar compuesto por un código
 de tres números (pais), un espacio y otros nueve números
  o solamente por los nueve números. La comprobación se
  hará utilizando una expresión regular.

• Finalmente el programa pedirá la marca, el ancho
y el alto del celular y visualizará (d.write):
• La resolución en la forma: “Número de pixeles: nnnn”.
• Las propiedades y valores de la llamada más cara.
• El país al que más se ha llamado en la forma: “Pais más llamado: nnnn”.
• La factura de llamadas.
*/
