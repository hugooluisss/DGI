TProducto = function(){
	var self = this;
	
	this.add = function(id, codigo, nombre, descripcion, departamento, marca, precioUnitario, impuestoIncluido, impuesto, metodoCosteo, costo, minimo, existencias,  fn){
		$.post('?mod=cproductos&action=guardar', {
				"id": id,
				"codigo": codigo,
				"nombre": nombre,
				"descripcion": descripcion,
				"departamento": departamento,
				"marca": marca,
				"precioUnitario": precioUnitario,
				"impuestoIncluido": impuestoIncluido,
				"impuesto": impuesto,
				"metodoCosteo": metodoCosteo,
				"costo": costo,
				"minimo": minimo,
				"existencias": existencias
			}, function(data) {
				if (data.band == 'false'){
					alert((data.mensaje == '' || data.mensaje == undefined)?"Upps. Ocurrió un error al agregar el producto: ":data.mensaje);
					if (fn.error != undefined)
						fn.error(data);
				}else
					if (fn.ok != undefined) fn.ok(data);
			}, "json"
		);
	};
	
	this.del = function(producto, fn){
		$.post('?mod=citems&action=del', {
			"id": producto,
		}, function(data){
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar el producto");
			}else{
				fn.ok(data);
			}
		}, "json");
	};
	
	this.findCodigo = function(codigo, fn){
		$.post('?mod=cproductos&action=findCodigo', {
			"codigo": codigo,
		}, function(data){
			fn.ok(data);
		}, "json");
	};
};