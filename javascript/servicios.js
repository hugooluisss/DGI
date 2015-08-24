$(document).ready(function(){
	$('#tblServicios').DataTable({
		"responsive": true,
		"language": espaniol
	});
	
	$("#btnAdd").click(function(){
		location.href = "?mod=servicioAdd";
	});
	
	$("#btnReset").click(function(){
		location.href = "?mod=servicios";
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtCodigo: "required",
			txtNombre: "required",
			txtPrecio: {
				required: true,
				min: 0,
				digits: true
			}
		},
		errorLabelContainer: $("ol", $("div.errores")),
		wrapper: 'li', 
		messages: {
			txtCodigo: "El código es necesario",
			txtNombre: "El nombre es necesario",
			txtPrecio: "El precio es necesario y solo hacepta números"
		},
		submitHandler: function(form){
			var obj = new TServicio;
			obj.add(
				$('#id').val(),
				$('#txtCodigo').val(),
				$('#txtNombre').val(),
				$('#txtDescripcion').val(),
				$('#txtPU').val(),
				$('#selImpInc').val(),
				$('#selImpuesto').val(),
				{
					ok: function(data){
						location.href = "?mod=servicios";
					},
					error: function(){
						$("#txtNombre").focus();
					}
				});
        }

    });
    
    $("[action=modificar]").click(function(){
    	location.href = "?mod=servicioAdd&id=" + $(this).attr("servicio");
    });
    
    $("[action=eliminar]").click(function(){
    	if(confirm("¿Seguro?")){
	    	var obj = new TServicio;
	    	obj.del($(this).attr("servicio"), {ok: function(){
		    	location.reload();
	    	}});
    	}
    });
    
    
    $("#txtCodigo").change(function(){
    	var obj = new TItem;
    	obj.existeCodigo($("#txtCodigo").val(), 2, {ok: function(data){
    		if (data.band){
    			var el = data.datos;
    			if ($("#id").val() == '' || $("#id").val() != el.id){
	    			if (data.tipo){
	    				if (confirm("Ya existe un servicio con ese código, ¿deseas cargarlo?")){
			    			$('#id').val(el.id);
							$('#txtCodigo').val(el.codigo);
							$('#txtNombre').val(el.nombre);
							$('#txtDescripcion').val(el.descripcion);
							$('#txtPU').val(el.precio);
							$('#selImpInc').val(el.impInc);
							$('#selImpuesto').val(el.impuesto);
						}else
							$('#txtCodigo').val("");
	    			}else{
	    				alert("Ese código esta siendo utilizado por un producto o paquete, utiliza otro código");
	    				$('#txtCodigo').val("");
	    			}
	    		}
    		}
    	}});
    });
    
    $("#txtNombre").change(function(){
    	if ($("#txtDescripcion").val() == '')
    		$("#txtDescripcion").val($("#txtNombre").val());
    });
});