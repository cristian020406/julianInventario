<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('id_rol')==1) {


			$this->load->view('administrador/plantilla/cabecera');
			$this->load->view('administrador/plantilla/cuerpo');
			$this->load->view('administrador/plantilla/pie');
		}
		if ($this->session->userdata('id_rol')==2) {


			$this->load->view('usuario/plantilla/cabecera');
			$this->load->view('usuario/plantilla/cuerpo');
			$this->load->view('usuario/plantilla/pie');
		}
		if ($this->session->userdata('id_rol')==3) {


			$this->load->view('invitado/plantilla/cabecera');
			$this->load->view('invitado/plantilla/cuerpo');
			$this->load->view('invitado/plantilla/pie');
		}

		if(!$this->session->userdata('id_rol')) {
	


		$this->load->view('LOGIN');
	}
	}




// fUNCION QUE BUSCA EL USUARIO
	public function logueo(){
		$usuario = $this->input->post('usuario',true);
		$clave = $this->input->post('clave',true);
		$this->load->model('modelo_logueo');
		$miusuario= $this->modelo_logueo->consulta_usuarios($usuario,$clave);
		$this->load->view('vlogueo',compact('miusuario'));
	}

	public function saliendo(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}




/* End of file welcome.php */
