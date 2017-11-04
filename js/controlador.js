
$(document).ready(function(){
	$("#btn-guardar").click(function(){
	var parametros= "txt-nombre="+$("#txt-nombre").val()+"&"+
					"txt-apellido="+$("#txt-apellido").val()+"&"+
					"txt-correo="+$("#txt-correo").val();/*+"&"+
					"txt-calificacion="+$("#txt-calificacion").val()+"&"+
					"slc-url-icono="+$("#slc-url-icono").val()+"&"+
					"txt-version="+$("#txt-version").val()+"&"+
					"slc-empresa="+$("#slc-empresa").val()+"&"+
					"slc-tipos-calificaciones="+$("#slc-tipos-calificaciones").val()+"&"+
					"slc-tipos-contenidos="+$("#slc-tipos-contenidos").val()*/
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