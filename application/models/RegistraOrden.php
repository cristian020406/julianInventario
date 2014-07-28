<?php 

class RegistraOrden extends CI_Model
{

	function __construct() {
		parent::__construct();
	}

	public function Nueva($fecha,$HD,$HI,$HF,$MI,$MF,$GIIP,$SGO,$OW,$pqt,$Pe,$ID_CIRCUITO,$municipio,$bodega,$observaciones)
	{

		$datos = array( 
			'fecha_inicial' => $fecha,
			'hora_hd' => $HD,
			'hora_hi' => $HI,
			'hora_hf' => $HF,
			'hora_mi' => $MI,
			'hora_mf' => $MF,
			'giip' => $GIIP,
			'sgo' => $SGO,
			'Ow' => $OW,
			'pqt' => $pqt,
			'pe' => $Pe,
			'id_circuito' => $ID_CIRCUITO,
			'municipio_corregimiento' => $municipio,
			'id_bodega' => $bodega,
			'observaciones' => $observaciones,
			'id_estado' => 1,
);
		$this->db->insert('ordenes',$datos);
	}
public function AsignaEjecutor($ejecutores, $giip,$contador)
	{
		// print_r($ejecutores);
		for ($i=0; $i < $contador ; $i++) { 
			
			$datos = array( 
			'id_asigna_ejecutores' => null,
			'id_ejecutor' =>$ejecutores[$i] ,
			'id_giip' => $giip,

);
		$this->db->insert('asigna_ejecutores',$datos);
	}

		}
public function AsignaMaterial($idNA,$idCA,$idMA,$contador1,$GIIP,$fecha)
	{
		// print_r($ejecutores);
		for ($i=0; $i < $contador1 ; $i++) { 
			
			$datos = array( 
			'id_instalacion' =>  NULL,
			'id_giip' => $GIIP,
			'codigo_material' => $idMA[$i],
			'cantidad' => $idCA[$i],
			'fecha_instalacion' => $fecha,
			'devuelto' => 0,
			'Nodo' => $idNA[$i],

);
		$this->db->insert('instacion_materiales',$datos);
	}
		}



	public function estagiip($giip)
	{
		$where  = array('giip' =>  $giip);
		$consulta = $this->db->select('*')
		->where($where)
		->get('ordenes');
	   return $consulta->row_array();

	}
}