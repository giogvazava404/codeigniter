<?php
class one_servise extends CI_Model{

	public function getOneServise($id)
	{
		if(!empty($id))
		{
			$query = $this->db->query("SELECT `date`,`title`,`long_text` FROM `services` WHERE `id`='".(int)$id."' AND `status`!=1");
			return $query->result();
		}
	}
	
	
}