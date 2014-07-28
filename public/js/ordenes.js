$(document).on('ready',function(){

	$(document).on('click','#nUsuario',ordenes);
})


function ordenes () {
	// alert('hola');
vista = 'ordenes'
		url = $('#url').text();
	    $.post(url+'index.php/Vistas/vista_orden',{vista:vista},function(data){		
	     	$('#respuesta').html(data);
		});
}

