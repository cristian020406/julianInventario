$(document).on('ready',function(){

	$(document).on('click','#nUsuario',usuario);
	$(document).on('click','#btn-Agrega-orden',cVistaNuevaOrden);
})


function usuario () {
vista = 'nUsuario'
		url = $('#url').text();
	    $.post(url+'index.php/vistas/vista_orden',{vista:vista},function(data){		
	     	$('#respuesta').html(data);
	     	$('.ui.dropdown').dropdown();
	     	$(document).on('click','#rCliente',Agregar_usuario);
		});
}
function cUsuario () {
vista = 'cUsuario'
		url = $('#url').text();
	    $.post(url+'index.php/vistas/vista_orden',{vista:vista},function(data){		
	     	$('#respuesta').html(data);
	     	$('.ui.dropdown').dropdown();

		});
}

function Agregar_usuario () {
	var si = confirm("Esta seguro que desea crear el usuario");
	if (si) {
			 Nombre = $('#Nombre').val();
	 Apellido = $('#Apellido').val();
	 id_Genero = $('#Genero').dropdown('get value');
	 Usuario = $('#usuario').val();
	 Clave = $('#Clave').val();
	 Documento = $('#Documento').val();
	 id_Cargo = $('#Cargo').dropdown('get value');
	 id_rol = $('#Rol').dropdown('get value');

	    $.post(url+'index.php/vistas/ingresar_usuario',{Nombre:Nombre,Apellido:Apellido,
	   id_Genero:id_Genero,Usuario:Usuario,Clave:Clave,
	   Documento:Documento,id_Cargo:id_Cargo,id_rol:id_rol },function(data){		
	   		$('#respuestadatos').removeClass('hidden');
	   		$('#respuestadatos').addClass('visible');
		})

	}

}
// °°°°°°°°°°°°°°°|Funcion para la vista de consulta de ordenes|°°°°°°°°°°°°°°°

$(document).on('click',"#btn-consulta-orden",cVistaOrden);

function cVistaOrden () {
vista = 'cOrden'
		url = $('#url').text();
	    $.post(url+'index.php/vistas/vista_orden',{vista:vista},function(data){		
	     	$('#respuesta').html(data);
	     	$('.ui.dropdown').dropdown();
			calendarioEs();
			 $( "#btn-fInicio,#btn-fFin" ).datepicker({dateFormat: 'yy-mm-d'});
	     	$(document).on('click','#btn-boBuscar',cOrdenes);
		});

};
// °°°°°°°°°°°°°°°|Funcion para la vista de agregarOrden|°°°°°°°°°°°°°°°
function cVistaNuevaOrden () {
vista = 'cNuevaOrden'
		url = $('#url').text();
	    $.post(url+'index.php/vistas/vista_orden',{vista:vista},function(data){		
	     	$('#respuesta').html(data);
	     		$('.ui.dropdown').dropdown();
	     		calendarioEs();
			 $( "#btn-fIorden" ).datepicker({dateFormat: 'yy-mm-d'});
			 validar_datos();
			 	


		});
	   


};
 function validar_datos () {

// console.log('test');
	$('#btn-conCir').on('click',carga_circuito);
	$('#bt-eje').on('click',agregaEjecutor);
}
 function carga_circuito (event) {
	event.preventDefault();
	id_circuito = $('#cam-conCir').val();
  $.post(url+'index.php/consultas/consultCircuito',{id_circuito:id_circuito},function(data){		
  			$('#res-conCir').html(data);

	})

}
function agregaEjecutor () {
	ejecutorcam=$('#datos-ejecutor');
	ejecutorActual=$('#miejecutor').dropdown('get text');
	idEjecutorActual=$('#miejecutor').dropdown('get value');
	datos = "<tr><td>"+ejecutorActual+"</td><td> <i onclick='remueveme(this)' class='icon red large remove'></i></td></tr>";
	ejecutorcam.append(datos);
}
function remueveme (elemento) {
	elemento.parentNode.parentNode.remove();
}
/*funcion que consulta ordenes cuando se escribe*/
function cOrdenes () {
	vBuscado = $('#btn-oBuscar').val();
	estado = $('#btn-estado').dropdown('get value');
	finicio = $('#btn-fInicio').val();
	ffin = $('#btn-fFin').val();
  $.post(url+'index.php/consultas/consultaOden',{vBuscado:vBuscado,estado:estado,finicio:finicio,ffin:ffin},function(data){		
  			$('#res-ClienteBuscado').html(data);
  			$('.ver').on('click',consultaDetalleOrden);
	})
  	 
 
// console.log(estado);

}


/*°°°°°°°°°°|CODIGO PARA LA VENTANA MODAL|°°°°°°°°°°°°°°°°°*/

function calendarioEs () {
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '<Ant',
 nextText: 'Sig>',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
// $("#startDate").datepicker({dateFormat: 'dd/mm/yy'});
}


/*funcion para llamar el detalle de las ordenes encontradas*/

function consultaDetalleOrden () {


			giip = $(this).text();
	  $.post(url+'index.php/consultas/consultaDetalleOrden',{giip:giip},function(data){		
  			$('#mimodal').html(data);
  			$('#mimodal').modal('show');	
	})

	

}