TProveedor = function(){
	var self = this;
	
	this.add = function(id, empresa, direccion, ciudad, estado, telefono, cuenta, nombre, puesto, comentarios, fn){
		$.post('?mod=cproveedor&action=guardar', {
				"id": id,
				"empresa": empresa,
				"direccion": direccion,
				"ciudad": ciudad,
				"estado": estado,
				"telefono": telefono,
				"cuenta": cuenta,
				"nombre": nombre,
				"puesto": comentarios,
				
			}, function(data) {
				if (data.band == 'false'){
					alert(data.mensaje == ''?"Upps. Ocurrió un error al agregar al proveedor": data.mensaje);
					if (fn.error != undefined)
						fn.error(data);
				}else
					if (fn.ok != undefined) fn.ok(data);
			}, "json"
		);
	};
	
	this.del = function(proveedor, fn){
		$.post('?mod=cproveedor&action=del', {
			"id": proveedor,
		}, function(data){
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar al proveedor");
			}else{
				fn.ok(data);
			}
		}, "json");
	};
};