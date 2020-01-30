var options = {
  enableHighAccuracy: true,
  timeout: 3000,
  maximumAge: 0
};

function showPosition(position) {
  var latlon = position.coords.latitude + "," + position.coords.longitude;

  var img_url = "https://maps.googleapis.com/maps/api/staticmap?center=
  "+latlon+"&zoom=14&size=400x300&sensor=false&key=YOUR_KEY";

  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}

function misCoordenadas(pos) {
  var crd = pos.coords;

  document.write('Tu posicion actual es:<br>');
  document.write('Latitud : ' + crd.latitude + '<br>');
  document.write('Longitud: ' + crd.longitude+ '<br>');
  document.write('Precision de (aprox): ' + crd.accuracy + ' metros.<br>');

//showPosition(pos);
};

function error(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      document.write("Peticion denegada de tu Geolocation.");
      break;
    case error.POSITION_UNAVAILABLE:
      document.write("Informacion de posicion no disponible.");
      break;
    case error.TIMEOUT:
      document.write("Se ha acabado el tiempo de espera de la peticion.");
      break;
    case error.UNKNOWN_ERROR:
      document.write("Error desconociod.");
      break;
  }
}

navigator.geolocation.getCurrentPosition(misCoordenadas, error, options);
