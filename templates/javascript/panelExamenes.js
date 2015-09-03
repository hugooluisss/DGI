$(document).ready(function(){
	getLista();
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtPeriodo: "required",
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Este campo es necesario",
			txtPeriodo: "Este campo es necesario"
		},
		submitHandler: function(form){
			var obj = new TExamen;
			
			tiempo = ($("#txtHoras").val() == undefined?0:$("#txtHoras").val()) * 60 + ($("#txtMinutos").val() == undefined?0:$("#txtMinutos").val());
			obj.add(
				$('#id').val(),
				$('#txtNombre').val(),
				$('#txtPeriodo').val(),
				tiempo,
				$('#txtDescripcion').val(),{
					before: function(){
						$("#frmAdd").disabled = true;
					},
					after: function(data){
						$("#frmAdd").disabled = true;
						
						if (data.band)
							getLista();
					}
				});
        }

    });
	
	function getLista(){
		$.get("?mod=listaExamenes", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TExamen;
					obj.del($(this).attr("examen"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = JSON.parse($(this).attr("datos"));
				
				$('#id').val(el.idExamen);
				$('#txtNombre').val(el.nombre);
				$('#txtPeriodo').val(el.periodo);
				$('#txtDescripcion').val(el.descripcion);
				
				$('#txtNombre').select();
			});
						
			$("#tblExamenes").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
});