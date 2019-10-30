
$(document).ready(function() {
	$("#tal").click(function(){
		$("#destino").css("visibility", "hidden");
		$.ajax({
			url:"php.php",
			type:'GET',
			data:{dni:'#formularito.getElementById(dni).value' ,nombre: "#nombre.value"},
			timeout:3000,
			success: function(respuesta){
				$("#exito").html(respuesta);
			},
			error: function(){
				$("#error").html("Ha dado error");
			},
			complete: function(){
				$("#loaded").html("Todo ha terminado");
			},
		});
	});
});