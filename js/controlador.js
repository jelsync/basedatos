
$(document).ready(function(){
	$("#btn-guardar").click(function(){
	var parametros= "txt-nombre="+$("#txt-nombre").val()+"&"+
					"txt-apellido="+$("#txt-apellido").val()+"&"+
					"txt-correo="+$("#txt-correo").val();
		$.ajax({
			url:"ajax/acciones.php?accion=guardar",
			data:parametros,
			method:"POST",
			success:function(respuesta){
				alert(respuesta);
			},
			error:function(err){
				alert("Error: " + err);
			}
		});
	});
});