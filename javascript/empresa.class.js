TEmpresa = function(){
	this.guardar = function(key, val, fn){
		$.post('?mod=cempresa&action=set', {
			"key": key,
			"val": val
		}, function(data){
			if (data.band == 'false'){
				if (fn.error != undefined)
					fn.error(data);
			}else{
				if (fn.ok != undefined)
					fn.ok(data);
			}
		}, "json");	
	};
};