TUsuario = function(){
	var self = this;
	
	this.add = function(id, nick, nombre, email, tipo, fn){
		$.post('?mod=cusuario&action=add', {
				"id": id,
				"nombre": nombre,
				"nick": nick,
				"email": email,
				"tipo": tipo
			}, function(data) {
				if (data.band == 'false'){
					alert(data.mensaje == ''?"Upps. Ocurrió un error al agregar al usuario":data.mensaje);
					fn.error(data);
				}else
					fn.ok(data);
			}, "json"
		);
	};
	
	this.setPass = function(usuario, pass, fn){
		$.post('?mod=cusuario&action=setPass', {
			"usuario": usuario,
			"pass": pass
		}, function(data){
			if (data.band == 'false'){
				fn.error(data);
			}else{
				fn.ok(data);
			}
		}, "json");
	};
	
	this.del = function(usuario, fn){
		$.post('?mod=cusuario&action=del', {
			"usuario": usuario,
		}, function(data){
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar al usuario");
			}else{
				fn.ok(data);
			}
		}, "json");
	}
};