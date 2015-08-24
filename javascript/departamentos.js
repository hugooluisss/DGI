$(document).ready(function(){
	$('#tblDepartamentos').DataTable({
		"responsive": true,
		"language": espaniol
	});
	
	$("#btnAdd").click(function(){
		location.href = "?mod=departamentoAdd";
	});
	
	$("#btnReset").click(function(){
		location.href = "?mod=departamentos";
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
		},
		errorLabelContainer: $("ol", $("div.errores")),
		wrapper: 'li', 
		messages: {
			txtNombre: "El nombre del departamento es necesario",
		},
		submitHandler: function(form){
			var obj = new TDepartamento;
			obj.add(
				$('#id').val(),
				$('#txtNombre').val(),
				$('#txtDescripcion').val(),
				{
					ok: function(data){
						location.href = "?mod=departamentos";
					},
					error: function(){
						$("#txtNombre").focus();
					}
				});
        }

    });
    
    $("[action=modificar]").click(function(){
    	location.href = "?mod=departamentoAdd&id=" + $(this).attr("departamento");
    });
    
    $("[action=eliminar]").click(function(){
    	if(confirm("¿Seguro?")){
	    	var obj = new TDepartamento;
	    	obj.del($(this).attr("departamento"), {ok: function(){
		    	location.reload();
	    	}});
    	}
    		
    });
});