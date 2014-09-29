<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->home();
	}
	
	public function home(){
		
		// navigation model
		$this->load->model("nav");
		$data["nav"] = $this->nav->getAllNav();
		$data["title"] = "test";
		// view
		$this->load->view("view_home", $data);
	}
	
}