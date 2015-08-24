$(document).ready(function(){
	$('#tblUsuarios').DataTable({
		"responsive": true,
		"language": espaniol
	});
	
	$("#btnAdd").click(function(){
		location.href = "?mod=usuarioAdd";
	});
	
	$("#btnReset").click(function(){
		location.href = "?mod=admonUsuarios";
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtUsuario: "required",
			txtEmail: {
				required : true,
				email: true
			},
			txtNombre: "required",
			txtConfirmar: {
				equalTo: "#txtPass"
			}
		},
		errorLabelContainer: $("ol", $("div.errores")),
		wrapper: 'li', 
		messages: {
			txtUsuario: "Indica el nombre de usuario",
			txtEmail: "Indica un correo electrónico válido",
			txtNombre: "Escribe el nombre del dueño de la cuenta",
			txtConfirmar: "La confirmación de contraseña no es correcta"
		},
		submitHandler: function(form){
			var obj = new TUsuario;
			obj.add($("#id").val(), $("#txtUsuario").val(), $("#txtNombre").val(), $("#txtEmail").val(), $("#selTipo").val(), {ok: function(data){
					if ($("#txtPass").val() != ''){
						$("#id").val(data.idUsuario);
						obj.setPass(data.idUsuario, $("#txtPass").val(), {ok: function(){
								location.href = "?mod=admonUsuarios";
							}, 
							error: function(){
								alert("Ocurrio un error al actualizar la contraseña");
							}
						});
					}else
						location.href = "?mod=admonUsuarios";
				},
				error: function(){
					$("#txtUsuario").focus();
				}
			});
        }

    });
    
    $("#frmAdd #txtUsuario").change(function(){
    	$("#valUsuario").show();
    	
    	$.post('?mod=cusuario&action=verificarNombreUsuario', {
			"id": $("#id").val(),
			"nombre": $("#txtUsuario").val()
		}, function(data) {
			if (data.band == 'true'){
				alert("El nombre de usuario que indicaste ya está siendo usado por otra persona, indica otro");
				$("#txtUsuario").val("");
			}
			
			$("#valUsuario").hide();
		}, "json");
    });
    
    $("#frmAdd #txtEmail").change(function(){
    	$("#valEmail").show();
    	
    	$.post('?mod=cusuario&action=verificarEmail', {
			"id": $("#id").val(),
			"email": $("#txtEmail").val()
		}, function(data) {
			if (data.band == 'true'){
				alert("La dirección de correo electrónico ya se encuentra registrada, no se puede utilizar");
				$("#txtEmail").val("");
			}
			
			$("#valEmail").hide();
		}, "json");
    });
    
    
    /****** Modificar ********/
    $("[action=modificar]").click(function(){
    	location.href = "?mod=usuarioAdd&id=" + $(this).attr("usuario");
    });
    
    $("[action=eliminar]").click(function(){
    	if(confirm("¿Seguro?")){
	    	var obj = new TUsuario;
	    	obj.del($(this).attr("usuario"), {ok: function(){
		    	location.reload();
	    	}});
    	}
    		
    });
});