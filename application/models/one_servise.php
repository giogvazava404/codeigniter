<?php
class one_servise extends CI_Model{

	public function getOneServise($id)
	{
		if(!empty($id))
		{
			$query = $this->db->query("SELECT `date`,`title`,`long_text` FROM `services` WHERE `id`='".(int)$id."' AND `status`!=1");
			
			if ($query->num_rows() <= 0)
			{
				echo '<meta http-equiv="refresh" content="0; url=/codeigniter/main" />'; exit();
			}		
			
			return $query->result();
		}
	}
	
	
}