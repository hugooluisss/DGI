TCliente = function(){
	var self = this;
	
	this.add = function(id, nombre, sexo, telefono, email, direccion, comentarios, fn){
		$.post('?mod=cclientes&action=guardar', {
				"id": id,
				"nombre": nombre,
				"sexo": sexo,
				"telefono": telefono,
				"email": email,
				"direccion": direccion,
				"comentarios": comentarios,
				
			}, function(data) {
				if (data.band == 'false'){
					alert(data.mensaje == ''?"Upps. Ocurrió un error al agregar al proveedor":data.mensaje);
					if (fn.error != undefined)
						fn.error(data);
				}else
					if (fn.ok != undefined) fn.ok(data);
			}, "json"
		);
	};
	
	this.del = function(cliente, fn){
		$.post('?mod=cclientes&action=del', {
			"id": cliente,
		}, function(data){
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar al cliente");
			}else{
				fn.ok(data);
			}
		}, "json");
	};
};