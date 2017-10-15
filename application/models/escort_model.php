<?php  

class escort_model extends CI_Model
{
	public function __construct(){parent::__construct();}



	//TABLA ESCORT
	public function GetEscort()
	{
		$sql = "SELECT E.*, F.RUTA FROM escort E, foto F WHERE E.ID = F.FK_ESCORT AND F.PRIORIDAD = 2";
		return $this->db->query($sql)->result();
	}

	public function GetEscortID($id)
	{
		$sql = "SELECT * from escort where  ID = '".$id."';";
		return $this->db->query($sql)->row();
	}

	public function InsertEscort($escort=array())
	{
		$this->db->insert('escort', $escort);
	}

	public function UpdateEscort($escort=array(),$id)
	{
		$this->db->where('ID', $id);
		$this->db->update('escort', $escort); 
	}

	public function DeleteEscort($id)
	{
		$this->db->where('ID', $id);
		$this->db->delete('escort');
	}


	//TABLA FOTOS
	public function InsertFoto($foto=array()) 
	{ 
		$this->db->insert('foto', $foto); 
	}

	public function GetFotos($id)
	{
		$sql = "SELECT * FROM foto where FK_ESCORT='".$id."';";
		return $this->db->query($sql)->result();
	}

	public function deletePhoto($idFoto)
	{
		$this->db->where('ID', $idFoto);
		$this->db->delete('foto');
	}

	//TABLA SERVICIOS

	public function GetServicios($id)
	{
		$sql = "SELECT * FROM servicio where FK_ESCORT='".$id."';";
		return $this->db->query($sql)->result();
	}


	//TABLA TAGS

	public function GetTag($id)
	{
		$sql = "SELECT * FROM tag where FK_ESCORT='".$id."';";
		return $this->db->query($sql)->result();
	}


	
}

?>