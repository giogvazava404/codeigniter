<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->getContact();
	}
	
	public function getContact(){
		if(isset($_POST["namelname"],$_POST['email'],$_POST['text']))
		{
			$this->load->model("mailer");
			$data["mailer_output"] = $this->mailer->sendEmail("giorgigvazava87@gmail.com", $_POST['email'], "კონტაქტი - ".$_POST["namelname"],$_POST["text"]);
		}
		// navigation model
		$this->load->model("nav");
		$data["nav"] = $this->nav->getAllNav();
		
		// load main_text
		$this->load->model("main_text");
		$copyright = $this->main_text->copyright();
		$data["copyright"] = $copyright[0]->{"text"};
		
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