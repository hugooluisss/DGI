$(document).ready(function(){
	$('#tblProveedores').DataTable({
		"responsive": true,
		"language": espaniol
	});
	
	$("#btnAdd").click(function(){
		location.href = "?mod=proveedorAdd";
	});
	
	$("#btnReset").click(function(){
		location.href = "?mod=proveedores";
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtEmpresa: "required",
			txtNombre: "required",
			txtEmail: {
				email: true
			}
		},
		errorLabelContainer: $("ol", $("div.errores")),
		wrapper: 'li', 
		messages: {
			txtEmpresa: "El nombre de la empresa es requerido",
			txtEmail: "No es una dirección de correo válida",
			txtNombre: "El nombre del contacto es necesario",
		},
		submitHandler: function(form){
			var obj = new TProveedor;
			obj.add(
				$('#id').val(),
				$('#txtEmpresa').val(),
				$('#txtDireccion').val(),
				$('#txtCiudad').val(),
				$('#txtEstado').val(),
				$('#txtTelefono').val(),
				$('#txtCuenta').val(),
				$('#txtNombre').val(),
				$('#txtPuesto').val(),
				$('#txtComentarios').val(),{
					ok: function(data){
						location.href = "?mod=proveedores";
					},
					error: function(){
						$("#txtNombre").focus();
					}
				});
        }

    });
    
    $("[action=modificar]").click(function(){
    	location.href = "?mod=proveedorAdd&id=" + $(this).attr("proveedor");
    });
    
    $("[action=eliminar]").click(function(){
    	if(confirm("¿Seguro?")){
	    	var obj = new TProveedor;
	    	obj.del($(this).attr("proveedor"), {ok: function(){
		    	location.reload();
	    	}});
    	}
    		
    });
});