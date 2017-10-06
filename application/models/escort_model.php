<?php  

class escort_model extends CI_Model
{


	  public function __construct()
   {
       parent::__construct();
   }

	public function getEscort()
	{
		$sql = "SELECT * FROM `escort`";
		return $this->db->query($sql)->result();
	}

	
}

?>