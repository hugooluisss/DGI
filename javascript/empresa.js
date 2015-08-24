$(document).ready(function(){
	$("[action=campo]").change(function(){
		obj = new TEmpresa;
		
		obj.guardar($(this).attr('key'), $(this).val(), {
			error: function(){
				alert("Ocurrió un error al actualizar el valor");
			}, ok: function(){
				alert("Valor actualizado");
			}
		});
	});
});