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
		$this->load->view('administrador/consultas/circuitoCon',compact('respuesta'));

	}
	public function consultaMaterial()
	{
		
		$material =  $this->input->post('material',true);
		$this->load->model('ordenes');
		$respuesta = $this->ordenes->consultaMaterial($material);
		$this->load->view('administrador/consultas/materialCon',compact('respuesta'));

	}
	public function estagiip()
	{
		$this->load->model('RegistraOrden');
		$giip =  $this->input->post('giip',true);
		$consulta = $this->RegistraOrden->estagiip($giip);
		$this->load->view('administrador/consultas/estagiip',compact('consulta'));

	}

	public function estadoOrden1()
	{
			$this->load->model('ordenes');
			$bodegas = $this->ordenes->bodegas();
			$ejecutor = $this->ordenes->ejecutor();
		
		$tipoVista =  $this->input->post('tipoVista',true);
		if ($tipoVista =="1") {
		$this->load->view('administrador/consultas/ordenEjecutada',compact('bodegas','ejecutor'));
			
		}if($tipoVista =="0") {
		$this->load->view('administrador/consultas/cancelarOrden',compact('bodegas','ejecutor'));
			
		}
	

	}
	public function RegistrarOrden()
	{

		$fecha = $this->input->post('fecha',true);
		$HD = $this->input->post('HD',true);
		$HI = $this->input->post('HI',true);
		$HF = $this->input->post('HF',true);
		$MI = $this->input->post('MI',true);
		$MF = $this->input->post('MF',true);
		$GIIP = $this->input->post('GIIP',true);
		$SGO = $this->input->post('SGO',true);
		$OW = $this->input->post('OW',true);
		$pqt = $this->input->post('pqt',true);
		$Pe = $this->input->post('Pe',true);
		$ID_CIRCUITO = $this->input->post('ID_CIRCUITO',true);
		$municipio = $this->input->post('municipio',true);
		$bodega = $this->input->post('bodega',true);
		$observaciones = $this->input->post('observaciones',true);
		$numeroEje = $this->input->post('numeroEje',true);
		$contador = $this->input->post('contador',true);
		$contador1 = $this->input->post('contador1',true);
		$idNA = $this->input->post('idNA',true);
		$idCA = $this->input->post('idCA',true);
		$idMA = $this->input->post('idMA',true);
		
		// codigo que registra los ejecutores
		$this->load->model('RegistraOrden');
		$insertaEjecutores = $this->RegistraOrden->AsignaEjecutor($numeroEje,$GIIP,$contador);
		$this->load->model('RegistraOrden');
		$insertaMateriales = $this->RegistraOrden->AsignaMaterial($idNA,$idCA,$idMA,$contador1,$GIIP,$fecha);

		// codgio que registra los datos del giip
		$consulta = $this->RegistraOrden->Nueva($fecha,$HD,$HI,$HF,$MI,$MF,$GIIP,$SGO,$OW,$pqt,$Pe,$ID_CIRCUITO,$municipio,$bodega,$observaciones);
	}
}