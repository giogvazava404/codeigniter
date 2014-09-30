<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gotoController extends CI_Controller {

	public function index()
	{
		$this->home();
	}
	
	public function home()
	{
		
		// navigation model
		$this->load->model("nav");
		$data["nav"] = $this->nav->getAllNav();
		$titl = $this->nav->title();
		if(!empty($titl)){ $data["title"] = $titl[0]->{"name"}; }else{ $data["title"] =""; }
		
		// load main_text
		$this->load->model("main_text");
		$main_text = $this->main_text->get_text();
		// commerce
		$g_f_c = $this->main_text->g_f_c();
		$copyright = $this->main_text->copyright();
		
		$data["main_text"] = $main_text[0]->{"text"};
		$data["main_title"] = $main_text[0]->{"name"};
		$data["main_url"] = $main_text[0]->{"url"};
		$data["g_f_c"] = $g_f_c[0]->{"text"};
		$data["copyright"] = $copyright[0]->{"text"};
		
		// load services
		$this->load->model("services");
		$data["service"] = $this->services->getAllServices(3);
		// view
		$this->load->view("view_home", $data);
	}
	
}