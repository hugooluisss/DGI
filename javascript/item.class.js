TItem = function(){
	var self = this;
	
	this.existeCodigo = function(codigo, tipo, fn){
		$.post('?mod=citems&action=buscarCodigo', {
				"codigo": codigo,
				"tipo": tipo
			}, function(data) {
				fn.ok(data)
			}, "json"
		);

	}
}