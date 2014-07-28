<?php


/**
* 
*/
class Ordenes extends CI_Model
{

	function __construct() {
		parent::__construct();
	}

	public function buscar_ordenes($palabra,$estado,$finicio,$ffin)
	{

$where4  = array('id_estado' =>$estado);
$finicioconvertida = date('Y-m-d', strtotime($finicio));
$finconvertida = date('Y-m-d', strtotime($ffin));
// $finconvertida = date('y-d-m', strtotime($ffin));
if (!$estado || $estado == 3 || $estado == "") {

// echo $this->output->enable_profiler(TRUE);

		if ( $finicio ="" || $ffin ="" || $finicio <= 0 ) {

			$where1  = array('sgo' =>$palabra);
			$where2  = array('Ow' =>$palabra);
			$where3  = array('pqt' =>$palabra);
			$whereGiip = array('giip' =>$palabra);
		$consulta = $this->db->select('giip, sgo, Ow, pe, fecha_inicial, hora_hd, hora_hi, hora_hf, hora_mi, hora_mf, municipio_corregimiento, descripcion_trabajo, id_circuito, nodo, id_ejecutores, id_bodega, observaciones, estados.estado_nombre, pqt')
		->join('estados', 'ordenes.id_estado = estados.id_estado')
			->or_like($where1)
			->or_like($where2)
			->or_like($where3)
			->or_like($whereGiip)
			->get('ordenes');
		   return $consulta->result();
		}
		if ((!$finicio ="" && !$finicio ="") ) {

			$whereFechai =  array('fecha_inicial >=' => $finicioconvertida);
			$whereGiip = array('giip' =>$palabra);
			$where1  = array('sgo' =>$palabra);
			$where2  = array('Ow' =>$palabra);
			$where3  = array('pqt' =>$palabra);
		$consulta = $this->db->select('giip, sgo, Ow, pe, fecha_inicial, hora_hd, hora_hi, hora_hf, hora_mi, hora_mf, municipio_corregimiento, descripcion_trabajo, id_circuito, nodo, id_ejecutores, id_bodega, observaciones, estados.estado_nombre, pqt')
				->or_like($where1)
		->join('estados', 'ordenes.id_estado = estados.id_estado')

				->or_like($where2)
				->or_like($where3)
				->or_like($whereGiip)
				->having($whereFechai)
				->having('fecha_inicial <=',$finconvertida)
				->get('ordenes');
			return $consulta->result();
		}

}

		$whereFechai =  array('fecha_inicial >=' => $finicioconvertida);
		$whereGiip = array('giip' =>$palabra);
		$where1  = array('sgo' =>$palabra);
		$where2  = array('Ow' =>$palabra);
		$where3  = array('pqt' =>$palabra);
		$consulta = $this->db->select('*')
		
		->or_like($where1)
		->or_like($where2)
		->or_like($whereGiip)
		->or_like($where3);
		$consulta = $this->db->having($where4)
		->having($whereFechai)
		->having('fecha_inicial <=',$finconvertida)
		->get('ordenes');
	   return $consulta->result();
		// }
		// else{

		// $where  = array('giip' =>$palabra);
		// $where1  = array('sgo' =>$palabra);
		// $where2  = array('Ow' =>$palabra);
		// $where3  = array('pqt' =>$palabra);
		// $consulta = $this->db->select('*')
		// ->like($where)


		// ->or_like($where1)
		// ->or_like($where2)
		// ->or_like($where3)

		// ->get('ordenes');
	 //   return $consulta->result();

	// }

	}

	public function detalleOrden($giip)
	{
		$where = array('giip' =>$giip);
		$consulta = $this->db->select('giip, sgo, Ow, pe, fecha_inicial, hora_hd, hora_hi, hora_hf, hora_mi, hora_mf, municipio_corregimiento, descripcion_trabajo, ordenes.id_circuito, nodo, id_ejecutores, bodega.nombre_bodega, observaciones, estados.estado_nombre, pqt, circuitos.nombre_circuito')
		->join('estados', 'ordenes.id_estado = estados.id_estado')
		->join('circuitos', 'ordenes.id_circuito  = circuitos.id_circuito')
		->join('bodega', 'ordenes.id_bodega  = bodega.id_bodega')
		// , 

		->where($where)
		->get('ordenes');
	   return $consulta->row();
	}

public function materialPorOrden($giip)
{
		$where = array('id_giip' =>$giip);
	$consulta = $this->db->select('id_instalacion, id_giip, codigo_material, cantidad, fecha_instalacion, devuelto, descripcion1')
	->join('materiales', 'instacion_materiales.codigo_material  = materiales.n_articulo')
	// n_articulo, descripcion1, descripcion2
	->where($where)
	->get('instacion_materiales');
	return $consulta->result();
}
	public function ejecutorPorOrden($giip)
	{
			$where = array('id_giip' =>$giip);
		$consulta = $this->db->select('ejecutores.id_ejecutor, ejecutores.nombre_ejecutor')
		->join('ejecutores', 'asigna_ejecutores.id_ejecutor  = ejecutores.id_ejecutor')
		->where($where)
		->get('asigna_ejecutores');
		return $consulta->result();
	}


	public function consultCircuito($id_circuito)
	{
		$where = array('id_circuito' =>$id_circuito);
		$consulta = $this->db->select('id_circuito, nombre_circuito')
		->where($where)
		->get('circuitos');
		return $consulta->row_array();
	}
	public function consultaMaterial($idMaterial)
	{
		$where = array('n_articulo' =>$idMaterial);
		$consulta = $this->db->select('*')
		->where($where)
		->get('materiales');
		return $consulta->row_array();
	}
	public function bodegas()
	{
		$consulta = $this->db->select('id_bodega, nombre_bodega')
		->get('bodega');
		return $consulta->result();
	}
	public function ejecutor()
	{
		$consulta = $this->db->select('id_ejecutor, nombre_ejecutor')
		->get('ejecutores');
		return $consulta->result();
	}


}


 ?>