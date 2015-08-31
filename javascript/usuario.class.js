TUsuario = function(){
	var self = this;
	
	this.add = function(num_personal, fn){
		$.post('?mod=cusuarios&action=add', {
				"num_personal": num_personal,
			}, function(data){
				if (data.band == 'false')
					console.log("Upps. Ocurrió un error al agregar al usuario " + data.mensaje);
					
				if (fn.after != undefined)
					fn.after(data);
			}, "json");
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
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar al usuario");
			}
		}, "json");
	};
	
	this.login = function(usuario, pass, fn){
		$.post('?mod=clogin&action=login', {
			"usuario": usuario,
			"pass": pass
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false'){
				console.log("Los datos del usuario no son válidos");
			}
		}, "json");
	}
};