<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Consultas extends CI_Controller {

	function __construct() {
		parent:: __construct();
	}


public function consultaOden()


{
	$valorbuscado=$this->input->post('vBuscado',true);
	$estado=$this->input->post('estado',true);
	$finicio=$this->input->post('finicio',true);
	$ffin=$this->input->post('ffin',true);
	$this->load->model('ordenes');
	$respuesta=$this->ordenes->buscar_ordenes($valorbuscado,$estado,$finicio,$ffin);
// $this->output->enable_profiler(TRUE);
	$this->load->view('administrador/consultas/orden_consultada',compact('respuesta'));

}

public function consultaDetalleOrden()
{
	
	$giip =  $this->input->post('giip',true);
	$this->load->model('ordenes');
	$respuesta = $this->ordenes->detalleOrden($giip);
	$materiales = $this->ordenes->materialPorOrden($giip);
	$ejecutores = $this->ordenes->ejecutorPorOrden($giip);
		$this->load->view('administrador/consultas/detalleOrden.php',compact('respuesta','materiales','ejecutores'));

}
public function consultCircuito()
{
	
	$id_circuito =  $this->input->post('id_circuito',true);
	$this->load->model('ordenes');
	$respuesta = $this->ordenes->consultCircuito($id_circuito);
	$this->load->view('administrador/consultas/circuitoCon.php',compact('respuesta'));

}

}