<?php
class get_db extends CI_Model{
	
	public function getAll()
	{
		$query = $this->db->query("SELECT `name` FROM `test`");
		return $query->result();
	}
	
}