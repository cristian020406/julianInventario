<?php


/**
* 
*/
class Usuarios extends CI_Model
{

	function __construct() {
		parent::__construct();
	}

	public function Cargos()
	{
		$consulta = $this->db->select('id_cargo, cargo')
		->get('cargos');
	   return $consulta->result();
	}
	public function Roles()
	{
		$consulta = $this->db->select('id_rol, nombre_rol')
		->get('roles');
	   return $consulta->result();
	}


	public function guarda_usuario($Nombre,$Apellido,$id_Genero,$Usuario,$Clave,$Documento,$id_Cargo,$id_rol)

	
	{
		$Clave1 = md5($Clave);
		$datos = array( 
	   'id_usuario'=> NULL,
       'Nombre' => $Nombre,
       'Apellido' => $Apellido,
       'id_Genero' => $id_Genero,
       'Usuario' => $Usuario,
       'Clave' => $Clave1,
       'Documento' => $Documento,
       'id_Cargo' => $id_Cargo,
       'id_rol' => $id_rol
);
		$this->db->insert('usuarios',$datos);
	}
}


 ?>