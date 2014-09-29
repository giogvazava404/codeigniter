<?php
class Services_all extends CI_Model{

	public function getAllServices($limit)
	{
		if(isset($limit)){ $limit = " LIMIT ".$limit; }else{ $limit=""; }
		$query = $this->db->query("SELECT `id`,`date`,`title`,`short_text` FROM `services` WHERE `status`!=1 ORDER BY `id` DESC $limit");
		return $query->result();
	}
	
	
}