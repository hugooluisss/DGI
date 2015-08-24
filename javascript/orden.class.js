TOrden = function(){
	var self = this;
	
	this.addItem = function(orden, item, cantidad, precio, fn){
		$.post('?mod=corden&action=addMov', {
				"orden": orden,
				"item": item,
				"cantidad": cantidad,
				"precio": precio
			}, function(data) {
				if (data.band == 'false'){
					alert((data.mensaje == '' || data.mensaje == undefined)?"Upps. Ocurrió un error al agregar el item: ":data.mensaje);
					if (fn.error != undefined)
						fn.error(data);
				}else
					if (fn.ok != undefined) fn.ok(data);
			}, "json"
		);
	}
	
	this.delItem = function(item, fn){
		$.post('?mod=corden&action=delMov', {
				"item": item
			}, function(data) {
				if (data.band == 'false'){
					alert((data.mensaje == '' || data.mensaje == undefined)?"Upps. Ocurrió un error al agregar el item: ":data.mensaje);
					if (fn.error != undefined)
						fn.error(data);
				}else
					if (fn.ok != undefined) fn.ok(data);
			}, "json"
		);
	}
	
	this.eliminar = function(id, fn){
		$.post('?mod=corden&action=eliminar', {
				"id": id,
			}, function(data) {
				if (data.band == 'false'){
					alert((data.mensaje == '' || data.mensaje == undefined)?"Upps. Ocurrió un error al eliminar la orden: ":data.mensaje);
					if (fn.error != undefined)
						fn.error(data);
				}else
					if (fn.ok != undefined) fn.ok(data);
			}, "json"
		);
	}
};