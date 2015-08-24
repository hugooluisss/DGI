$(document).ready(function(){
	$('#tblProductos').DataTable({
		"responsive": true,
		"language": espaniol
	});
	
	$("#btnAdd").click(function(){
		location.href = "?mod=productoAdd";
	});
	
	$("#btnReset").click(function(){
		location.href = "?mod=productos";
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
			},
			txtExistencias: {
				required: true,
				min: 0,
				digits: true
			},
			txtMinimo: {
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
			txtPrecio: "El precio es necesario y solo hacepta números",
			txtExistencias: "Es necesario que indiques las existencias",
			txtMinimo: "Indica una cantidad minima en el stock"
		},
		submitHandler: function(form){
			var obj = new TProducto;
			obj.add(
				$('#id').val(),
				$('#txtCodigo').val(),
				$('#txtNombre').val(),
				$('#txtDescripcion').val(),
				$('#selDepartamento').val(),
				$('#txtMarca').val(),
				$('#txtPU').val(),
				$('#selImpInc').val(),
				$('#selImpuesto').val(),
				$('#selCosteo').val(),
				$('#txtCosto').val(),
				$('#txtMinimo').val(),
				$("#txtExistencias").val(),
				{
					ok: function(data){
						location.href = "?mod=productos";
					},
					error: function(){
						$("#txtNombre").focus();
					}
				});
        }

    });
    
    $("[action=modificar]").click(function(){
    	location.href = "?mod=productoAdd&id=" + $(this).attr("producto");
    });
    
    $("[action=eliminar]").click(function(){
    	if(confirm("¿Seguro?")){
	    	var obj = new TProducto;
	    	obj.del($(this).attr("producto"), {ok: function(){
		    	location.reload();
	    	}});
    	}
    });
    
    
    $("#txtCodigo").change(function(){
    	var obj = new TItem;
    	obj.existeCodigo($("#txtCodigo").val(), 1, {ok: function(data){
    		if (data.band){
    			var el = data.datos;
    			if ($("#id").val() == '' || $("#id").val() != el.id){
	    			if (data.tipo){
	    				if (confirm("Ya existe un producto con ese código, ¿deseas cargarlo?")){
			    			$('#id').val(el.id);
							$('#txtCodigo').val(el.codigo);
							$('#txtNombre').val(el.nombre);
							$('#txtDescripcion').val(el.descripcion);
							$('#selDepartamento').val(el.departamento);
							$('#txtMarca').val(el.marca);
							$('#txtPU').val(el.precio);
							$('#selImpInc').val(el.impInc);
							$('#selImpuesto').val(el.impuesto);
							$('#selCosteo').val(el.idTipoCosteo);
							$('#txtCosto').val(el.costo);
							$('#txtMinimo').val(el.minimo);
							$("#txtExistencias").val(el.existencias);
						}else
							$('#txtCodigo').val("");
	    			}else{
	    				alert("Ese código esta siendo utilizado por un servicio o paquete, utiliza otro código");
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