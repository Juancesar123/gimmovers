<?php
Class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Service');
		$this->load->model('galery');
	}
	public function index(){
		$this->load->view("home2");
	}
	public function dashboard(){
		$this->load->view("home");
	}
	public function login(){
		$this->load->view("login");
	}
	public function ourservices(){
		$data["raw_data"] = $this->Service->view_all();
		$this->load->view("service",$data);
	}
	public function lihat_galery(){
		$data["raw_data"] = $this->galery->viewall();
		$data["proses"] = $this->galery->viewallproses();
		$data["storage"] = $this->galery->viewallstorage();
		$data["trans"] = $this->galery->viewalltrans();
		$this->load->view("gallery",$data);
	}
}
?>