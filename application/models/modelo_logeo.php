<?php


/**
* 
*/
class Modelo_logeo extends CI_Model
{

	function __construct() {
		parent::__construct();
	}

	public function consulta_usuarios($usuario,$clave)
	{
		
		$where  = array('Usuario' =>  $usuario, 'Clave'=> $clave);
		$consulta = $this->db->select('giip, sgo, Ow, pe, fecha_inicial, hora_hd, hora_hi, hora_hf, hora_mi, hora_mf, municipio_corregimiento, descripcion_trabajo, id_circuito, nodo, id_ejecutores, id_bodega, observaciones,estados.estado_nombre , pqt')
		->where($where)
		->join('estados', 'ordenes.id_estado = estados.id_estado')
		->get('usuarios');
	   return $consulta->row_array();



	}

}


 ?>