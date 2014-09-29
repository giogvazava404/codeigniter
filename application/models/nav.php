<?php
class nav extends CI_Model{

	public function getAllNav()
	{
		$query = $this->db->query("SELECT `name`,`url`,`type` FROM `navigation` WHERE `status`!=1 ORDER BY `position` ASC");
		return $query->result();
	}
	
	public function title()
	{
		$url = explode("/",$_SERVER['REQUEST_URI']);
		
		$query = $this->db->query("SELECT `name`,`type` FROM `navigation` WHERE `url`='".mysql_real_escape_string($url[2])."' AND `status`!=1");
		return $query->result();
	}
	
	
}