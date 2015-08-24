TDepartamento = function(){
	var self = this;
	
	this.add = function(id, nombre, descripcion, fn){
		$.post('?mod=cdepartamentos&action=guardar', {
				"id": id,
				"nombre": nombre,
				"descripcion": descripcion
			}, function(data) {
				if (data.band == 'false'){
					alert(data.mensaje == ''?"Upps. Ocurrió un error al agregar al departamento":data.mensaje);
					if (fn.error != undefined)
						fn.error(data);
				}else
					if (fn.ok != undefined) fn.ok(data);
			}, "json"
		);
	};
	
	this.del = function(depto, fn){
		$.post('?mod=cdepartamentos&action=del', {
			"id": depto,
		}, function(data){
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar al departamento");
			}else{
				fn.ok(data);
			}
		}, "json");
	};
};