<?php  

class escort_model extends CI_Model
{
	public function __construct(){parent::__construct();}

	public function getEscort()
	{
		$sql = "SELECT * FROM `escort`";
		return $this->db->query($sql)->result();
	}

	public function InsertEscort($escort=array())
	{
		$this->db->insert('escort', $escort);
	}

	public function DeleteEscort($id)
	{
		$this->db->where('ID', $id);
		$this->db->delete('escort');
	}

	
}

?>