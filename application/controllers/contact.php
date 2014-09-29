<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->getContact();
	}
	
	public function getContact(){
		
		// navigation model
		$this->load->model("nav");
		$data["nav"] = $this->nav->getAllNav();
		//get tittle
		$tit = $this->nav->title();
		$data["title"] = $tit[0]->{'name'};
		
		//page type
		$page_type = $tit[0]->{'type'};
		
		//get content
		$this->load->model("map");
		$data["map"] = $this->map->output("1140","310");
		// get contact form
		$this->load->model("contactForm");
		$data["contact_form"] = $this->contactForm->output();
		
		// load view
		$this->load->view("view_contact", $data);
	}
	
}