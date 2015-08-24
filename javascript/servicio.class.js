TServicio = function(){
	var self = this;
	
	this.add = function(id, codigo, nombre, descripcion, precioUnitario, impuestoIncluido, impuesto, fn){
		$.post('?mod=cservicios&action=guardar', {
				"id": id,
				"codigo": codigo,
				"nombre": nombre,
				"descripcion": descripcion,
				"precioUnitario": precioUnitario,
				"impuestoIncluido": impuestoIncluido,
				"impuesto": impuesto
			}, function(data) {
				if (data.band == 'false'){
					alert(data.mensaje == ''?"Upps. Ocurrió un error al agregar el servicio: ":data.mensaje);
					if (fn.error != undefined)
						fn.error(data);
				}else
					if (fn.ok != undefined) fn.ok(data);
			}, "json"
		);
	};
	
	this.del = function(id, fn){
		$.post('?mod=citems&action=del', {
			"id": id,
		}, function(data){
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar el servicio");
			}else{
				fn.ok(data);
			}
		}, "json");
	};
};