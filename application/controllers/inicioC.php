<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InicioC extends CI_Controller {

	public function index()
	{
		$this->load->view('plantilla/cabecera');
		$this->load->view('plantilla/cuerpo');
		$this->load->view('plantilla/pie');
	}
}
