<?php
class Content extends CI_Model{

	public function getContent($type)
	{
		$url = explode("/",$_SERVER['REQUEST_URI']);
		if($type=="text"){
			$query = $this->db->query("SELECT `text` FROM `navigation` WHERE `url`='".mysql_real_escape_string($url[2])."' AND `status`!=1");
		}
		return $query->result();
	}
	
	
}