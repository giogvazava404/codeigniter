<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->getAbout();
	}
	
	public function getAbout(){
		
		// navigation model
		$this->load->model("nav");
		$data["nav"] = $this->nav->getAllNav();
		//get tittle
		$tit = $this->nav->title();
		$data["title"] = $tit[0]->{'name'};
		
		// load main_text
		$this->load->model("main_text");
		$copyright = $this->main_text->copyright();
		$data["copyright"] = $copyright[0]->{"text"};
		
		//page type
		$page_type = $tit[0]->{'type'};
		
		//get content
		$this->load->model("content");
		$tex = $this->content->getContent($page_type);
		$data["text"] = $tex[0]->{'text'};
		
		// load view
		$this->load->view("view_about", $data);
	}
	
}