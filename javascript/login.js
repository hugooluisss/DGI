$(document).ready(function(){
	console.log("Cargando script");
	$("form:not(.filter) :input:visible:enabled:first").focus();
	
	$("#frmLogin").submit(function(){
		console.log("Validando datos del login");
		if ($("#usuario").val() == ""){
			alert("Escribe tu usuario o grupo");
			$("#usuario").focus();
		}else if(($("#password").val() == "")){
			alert("Escribe tu contraseña");
			$("#password").focus();
		}else{
			console.log("Validación inicial exitosa");
			$('#frmLogin').find('input, textarea, button, select').attr('disabled', true);
			$.post(
				'?mod=clogin&action=validarCredenciales', {
					usuario : $('#usuario').val(), 
					pass: $('#password').val()
				},
				function(result){
					if(!result.band){
						alert(result.mensaje);
						
						$("#password").select();
					}else
						window.location.href = "?mod=panel";
					
					$('#frmLogin').find('input, textarea, button, select').attr('disabled', false);
				},
				"json"
			);
		}
	});
});