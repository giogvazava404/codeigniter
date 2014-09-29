<?php
class map extends CI_Model{

	public function output($width,$height)
	{
		$map = '<iframe src="https://mapsengine.google.com/map/u/0/embed?mid=z1_dhvgK493o.kC38FmBfRUsE" width="'.$width.'" height="'.$height.'" style="margin:0; padding:0; border:0; outline:0; overflow:hidden" frameborder=0></iframe>';
		return $map;
	}	
	
}