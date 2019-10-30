

var mi_nombre = prompt("di tu nombre","Carlos");

$(document).ready(function () {
	$("#link").click(function(evento){
		evento.preventDefault();
		$("#form").reset();
	});
});