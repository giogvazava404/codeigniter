<?php
class Math extends CI_Model{
	
	public function add($v1, $v2)
	{
		return $v1 + $v2;
	}
	
	public function sub($v1, $v2)
	{
		return $v1 - $v2;
	}
	
}