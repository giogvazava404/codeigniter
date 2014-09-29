<?php
class main_text extends CI_Model{

	public function get_text()
	{
		$query = $this->db->query("SELECT `name`,`text`,`url` FROM `navigation` WHERE `id`=1");
		return $query->result();
	}
	
	public function g_f_c()
	{
		$query = $this->db->query("SELECT `title`,`text` FROM `main_text` WHERE `id`=2");
		return $query->result();
	}
	
}