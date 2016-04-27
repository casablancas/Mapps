<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo extends CI_Model 
{
	function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
	}


	public function logueo($usuario, $contraseña)
	{

		$query = $this->db->query("SELECT * FROM persona WHERE usuario='$usuario' AND password='$contraseña'");

		if ($query->num_rows() == 0) 
		  $query = FALSE;
		else
		{
			$id = $query->row();
			$query = $id->idpersona;
		} 


	   return $query;


	}


	public function departamentos()
	{
		$query=$this->db->query("SELECT * FROM departamento");
		if ($query->num_rows() == 0) 
		  $query=FALSE;

	   return $query;
	}

	public function agregarDepto($latitud, $longitud, $precio, $agua, $luz, $telefono, $gas, $internet)
	{
		$departamento = array(
				'latitud' =>$latitud,
				'longitud' =>$longitud,
				'precio' =>$precio,
				'foto'=>"",
				'agua'=>$agua,
				'tel'=>$telefono,
				'luz'=>$luz,
				'gas'=>$gas,
				'internet'=>$internet,
				'persona_idpersona'=>1
			);


		return $this->db->insert('departamento', $departamento);
		
		
	}


	public function depto($id)
	{
		$query=$this->db->query("SELECT * FROM departamento WHERE iddpto='$id'");
		if ($query->num_rows() == 0) 
		  $query=FALSE;

	   return $query;
	}

	public function agregarUsuario($nombre, $apellido, $tel, $correo, $tipo, $usuario, $password){

		$persona = array(
				'nombre' => $nombre,
				'apellido' => $apellido,
				'tel' => $tel,
				'correo' => $correo,
				'tipo' => $tipo,
				'usuario' => $usuario,
				'password' => $password,
			);
		return $this->db->insert('persona', $persona);
	}

	public function eliminar($id){

		$res = $this->db->delete('departamento', array('iddpto' => $id));
		return $res;

	}


	public function modificar($id, $latitud, $longitud, $precio, $agua, $luz, $tel, $gas, $internet){

		$departamento = array(
				'latitud' =>$latitud,
				'longitud' =>$longitud,
				'precio' =>$precio,
				'foto'=>"",
				'agua'=>$agua,
				'tel'=>$tel,
				'luz'=>$luz,
				'gas'=>$gas,
				'internet'=>$internet,
			);
		$this->db->where('iddpto', $id);
		$res = $this->db->update('departamento', $departamento);
		return $res;
	}

}