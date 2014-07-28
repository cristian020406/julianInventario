
$(document).on('click','#login',logeando);

$("#usuario,#clave").on('keypress',function (e) {
 	if ( e.which==13) {

		 	logeando();
		}
	})
function logeando (argument) {
		  	usuario= $('#usuario').val();
	  	clave= $('#clave').val();
		url = $('#url').text();
	    $.post(url+'index.php/inicio/logueo' ,{usuario: usuario,clave: clave},function(data){		
	     	$('#mensaje_malo').html(data);
		});
}



