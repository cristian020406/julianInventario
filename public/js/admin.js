$(document).on('ready',function(){

	$(document).on('click','#nUsuario',usuario);
	$(document).on('click','#btn-Agrega-orden',cVistaNuevaOrden);
	$('#respuesta').on('click','#btn-conCir',carga_circuito);
	$('#respuesta').on('click','#bt-eje',agregaEjecutor);
	$('#respuesta').on('click','#ingresarMater',AgregaMateriales);
	$('#respuesta').on('blur','#eGIIP',verificarGiip);
	$('#respuesta').on('click','#guarddOrden',RegistrarOrden);
	$('#respuesta').on('keyup','#idMa',function  (e) {
		
	if ( e.which==13) {

		 	BuscaMaterial();
		}

	});
	$('#respuesta').on('click','#btn-idMa',BuscaMaterial);

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
	     	 $('#respuesta').on('change','#EstadoConsultaOrden',EstadoConsultaOrden);
			 $( "#btn-fIorden" ).datepicker({dateFormat: 'yy-mm-d'});
			 validar_datos();
			 	


		});
	   
function EstadoConsultaOrden () {
	estadoo = $('#EstadoConsultaOrden').dropdown('get value');
			url = $('#url').text();
	    $.post(url+'index.php/consultas/estadoOrden1',{tipoVista:estadoo},function(data){
	    	$('#respuesta').html(data);
	     		$('.ui.dropdown').dropdown();
	     		$('#btn-fIorden').datepicker({dateFormat: 'yy-mm-d'});
	    });

}



};
function verificarGiip () {

giip = $('#eGIIP');
	    $.post(url+'index.php/consultas/estagiip',{giip:giip.val()},function(data){
	    	if(data == '' || data == 0) {
	    		
	    	}else{
	    		alert('ese giip ya esta ');
	    		giip.val('');
	    		giip.focus();
	    	}
	    });



}
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
	datos = "<tr><td class='ejeNombre' data-ejecutor='"+idEjecutorActual+"' >"+ejecutorActual+"</td><td> <i onclick='remueveme(this)' class='icon red large remove'></i></td></tr>";
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

}
function BuscaMaterial () {

	console.log('BuscaMaterial');
	material = $('#idMa').val();
	campoNombreMa= $('#cam-busM');
	// datosDeMateriales = $('#datosDeMateriales');

  $.post(url+'index.php/consultas/consultaMaterial',{material:material},function(data){

  		campoNombreMa.remove();
  		$('#desMate').remove();
  		$('#thMaterial').after(data);
  	})
}
// funcion que agrega el nodo y el material cuando se le da click
	function AgregaMateriales () {

	material = $('#idMa').val();
	campoNombreMa= $('#cam-busM').text();
	campodesMa= $('#desMate').text();
	datosDeMateriales = $('#datosDeMateriales');
	nodo = $('#nodoBs').val();
	cantidadMa = $('#cantidadMate');
			if ($('#cam-busM').hasClass('error')) {
				alert('no es valido el material que selecciono');
				$('#idMa').focus();
				return false;
			}
			if (material == "" || material == null) {
			alert('ud no ha seleccionado ningun material');
				$('#idMa').focus();

			return false;
			}
			if (nodo == "" || nodo == null) {
				alert('no ha seleccionado el nodo');
				$('#nodoBs').focus();

				return false;
			}
			if (cantidadMa.val() == "" || cantidadMa.val() == 0) {
				alert('no ha seleccionado la cantidad');
				cantidadMa.focus();

				return false;

			}


	materialdato="<tr><td class='idMaterialC' data-idM="+material+">"+material+"</td><td colspan='2' >"+campoNombreMa+"</td><td colspan='5' >"+campodesMa+"</td><td class='idCanti' data-cantidad="+cantidadMa.val()+"  >"+cantidadMa.val()+"</td><td class='idNodoC' data-nodo="+nodo+" >"+nodo+"</td><td > <i onclick='remueveme(this)' class='icon red large remove'></i></td></tr>";
	datosDeMateriales.append(materialdato);
	}


/*funcion para registrar la orden en la base de datos*/
function RegistrarOrden () {
		fecha = $('#btn-fIorden').val();
		HD = $('#hhd').val();
		HI = $('#hHI').val();
		HF = $('#hHF').val();
		MI = $('#hMI').val();
		MF  = $('#hMF').val();
		GIIP = $('#eGIIP').val();
		SGO = $('#eSGO').val();
		OW = $('#eOW').val();
		pqt = $('#epqt').val();
		Pe = $('#Pe').dropdown('get value');
		ID_CIRCUITO = $('#cam-conCir').val();
		municipio = $('#emunicipio').val();
		bodega = $('#ebodega').dropdown('get value');
		observaciones = $('#txobserv').val();
		var cjEjecutores = document.querySelectorAll('#datos-ejecutor td.ejeNombre');
		var idM = document.querySelectorAll('#datosDeMateriales td.idMaterialC');
		var idC = document.querySelectorAll('#datosDeMateriales td.idCanti');
		var idN = document.querySelectorAll('#datosDeMateriales td.idNodoC');

		var numeroEje = new Array;
		var idMA = new Array;
		var idCA = new Array;
		var idNA = new Array;
		for (var i = 0; i < cjEjecutores.length; i++) {
			if(cjEjecutores[i].getAttribute('data-ejecutor')){
				numeroEje.push(cjEjecutores[i].getAttribute('data-ejecutor'));
			}
		}
		for (var i = 0; i < idM.length; i++) {

			if(idM[i].getAttribute('data-idM')){
				idMA.push(idM[i].getAttribute('data-idM'));
			}
			if(idC[i].getAttribute('data-cantidad')){
				idCA.push(idC[i].getAttribute('data-cantidad'));
			}
			if(idN[i].getAttribute('data-nodo')){
				idNA.push(idN[i].getAttribute('data-nodo'));
			}

		}
		contador = numeroEje.length;
		contador1 = idM.length;
	console.log(idNA,idCA,idMA);
	$.post(url+'index.php/consultas/RegistrarOrden',{ fecha: fecha,HD: HD,HI: HI,HF: HF,MI: MI,MF: MF,GIIP: GIIP,SGO: SGO,OW: OW,pqt: pqt,Pe: Pe,ID_CIRCUITO: ID_CIRCUITO,municipio: municipio,bodega: bodega,observaciones: observaciones,numeroEje:numeroEje, contador:contador,idNA:idNA,idCA:idCA,idMA:idMA,contador1:contador1}, function(data) {

		confirm('se registro correctamente la orden');
		window.location= url;
	});


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