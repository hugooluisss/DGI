$(document).ready(function(){
	$("#txtInstrucciones").wysihtml5();	
	getListaMedios();
});


$(document).ready(function(){
	$('#fileupload').fileupload({
        url: "?mod=creactivos&action=upload&examen=" + $("#examen").val(),
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                //$('<p/>').text(file.name).appendTo('#files');
                if (file.error !== undefined)
                	alert("Upps... ocurrió un error al subir el archivo " + file.name + ": " + file.error);
                	
                getListaMedios();
            });
            
            
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );	
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');

});

function getListaMedios(){
	$.get("?mod=listaMediosReactivo&examen=" + $("#examen").val(), function( data ) {
		$("#dvListaMedios").html(data);
	});
}