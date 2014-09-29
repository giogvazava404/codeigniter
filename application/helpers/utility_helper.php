<?php
class utility_helper{
	public function index(){
		$assets = $this->asset_url();
		return $assets;
	}
	public function asset_url(){
		return base_url().'assets/';
	}
}
?>