<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->addStaff( );
		$this->home();
	}
	
	public function home(){
		$data["title"] = "Home";		
		$this->load->view("view_home", $data);
	}
	
	public function about(){
		$data["title"] = "About";		
		$this->load->view("view_about", $data);
	}
	
	public function getValues()
	{
		$this->load->model("get_db");
		$data["title"] = "database outlook";
		$data["db"] = $this->get_db->getAll();
		$this->load->view("view_datax",$data);
	}
}