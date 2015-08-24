$(document).ready(function(){
	$('#tblOrdenes').DataTable({
		"responsive": true,
		"language": espaniol,
		"order": [[0, "desc"]]
	});
	
	$("[action=modificar]").click(function(){
    	location.href = "?mod=entradaAdd&id=" + $(this).attr("orden");
    });
    
    $("[action=eliminar]").click(function(){
    	if(confirm("¿Seguro de querer eliminar la orden?")){
			obj = new TOrden;
			
			obj.eliminar($(this).attr("orden"), {
				ok: function(data){
					alert("Se eliminó la orden");
					location.href = "?mod=entradas";
				}
			});
		}
    });
});