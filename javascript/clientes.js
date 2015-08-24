$(document).ready(function(){
	$('#tblClientes').DataTable({
		"responsive": true,
		"language": espaniol
	});
	
	$("#btnAdd").click(function(){
		location.href = "?mod=clienteAdd";
	});
	
	$("#btnReset").click(function(){
		location.href = "?mod=clientes";
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtEmail: {
				email: true
			}
		},
		errorLabelContainer: $("ol", $("div.errores")),
		wrapper: 'li', 
		messages: {
			txtEmail: "No es una dirección de correo válida",
			txtNombre: "El nombre del cliente es necesario",
		},
		submitHandler: function(form){
			var obj = new TCliente;
			obj.add(
				$('#id').val(),
				$('#txtNombre').val(),
				$('#selSexo').val(),
				$('#txtTelefono').val(),
				$('#txtEmail').val(),
				$('#txtDireccion').val(),
				$('#txtComentarios').val(),{
					ok: function(data){
						location.href = "?mod=clientes";
					},
					error: function(){
						$("#txtNombre").focus();
					}
				});
        }

    });
    
    $("[action=modificar]").click(function(){
    	location.href = "?mod=clienteAdd&id=" + $(this).attr("cliente");
    });
    
    $("[action=eliminar]").click(function(){
    	if(confirm("¿Seguro?")){
	    	var obj = new TCliente;
	    	obj.del($(this).attr("cliente"), {ok: function(){
		    	location.reload();
	    	}});
    	}
    		
    });
});