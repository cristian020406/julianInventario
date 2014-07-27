<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vistas extends CI_Controller {

	public function index()
	{
		
	}
	public function vista_orden(){
		$this->load->library('calendar');
	$this->load->model('usuarios');
	$cargos = $this->usuarios->Cargos();
	$roles = $this->usuarios->Roles();
		$vista = $this->input->post('vista',true);
		if ($vista == 'ordenes') {
	



			$this->load->view('administrador/ordenes/index');
		}
		if ($vista == 'nUsuario') {
			$this->load->view('administrador/usuarios/nuevo_usuario',compact('cargos','roles'));
		}
		if ($vista == 'cUsuario') {
			$this->load->view('administrador/usuarios/Consultar_usuario');
		}
		if ($vista == 'cOrden') {
			$this->load->view('administrador/ordenes/cOrden');
		}
		if ($vista == 'cNuevaOrden') {
			$this->load->model('ordenes');
			$bodegas = $this->ordenes->bodegas();
			$ejecutor = $this->ordenes->ejecutor();

			$this->load->view('administrador/ordenes/nOrden',compact('bodegas','ejecutor'));
		}
	}

	public function ingresar_usuario()
	{
			$this->load->model('usuarios');
		$Nombre = $this->input->post('Nombre',TRUE);
		$Apellido = $this->input->post('Apellido',TRUE);
		$id_Genero = $this->input->post('id_Genero',TRUE);
		$Usuario = $this->input->post('Usuario',TRUE);
		$Clave = $this->input->post('Clave',TRUE);
		$Documento = $this->input->post('Documento',TRUE);
		$id_Cargo = $this->input->post('id_Cargo',TRUE);
		$id_rol = $this->input->post('id_rol',TRUE);
		$consula = $this->usuarios->guarda_usuario($Nombre,$Apellido,$id_Genero,
$Usuario,$Clave,$Documento,$id_Cargo,$id_rol);
		$this->load->view('administrador/consultas/usuario_ingresado');
	}

}