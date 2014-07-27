<?php


/**
* 
*/
class Modelo_logueo extends CI_Model
{

	function __construct() {
		parent::__construct();
	}

	public function consulta_usuarios($usuario,$clave)
	{
		$clave1 = md5($clave);
		
		$where  = array('Usuario' =>  $usuario, 'Clave'=> $clave1);
		$consulta = $this->db->select('*')
		->where($where)
		->get('usuarios');
	   return $consulta->row_array();



	}

}


 ?>