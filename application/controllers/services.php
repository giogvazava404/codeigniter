<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$this->views();
	}
	
	public function views($id = false)
	{
		// navigation model
		$this->load->model("nav");
		$data["nav"] = $this->nav->getAllNav();
		
		$url = explode("/",$_SERVER['REQUEST_URI']);
		
		// load main_text
		$this->load->model("main_text");
		$copyright = $this->main_text->copyright();
		$data["copyright"] = $copyright[0]->{"text"};
		
		if(!empty($url[4]))
		{ 
			$this->load->model("one_servise");
			$oneService = $this->one_servise->getOneServise($url[4]);
			$data["date"] = $oneService[0]->{"date"};
			$data["title"] = $oneService[0]->{"title"};
			$data["long_text"] = $oneService[0]->{"long_text"};
			// view
			$this->load->view("view_oneServices", $data);
		}
		else
		{
			$data["title"] = "სერვისები";
			// load services
			$this->load->model("services_all");
			$data["service"] = $this->services_all->getAllServices(10);
			
			// view
			$this->load->view("view_services", $data);
		}
		
	}
	
}