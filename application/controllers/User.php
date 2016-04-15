<?php
Class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('managementuser');
	}
	public function index(){
		$this->load->view("managementuser");
	}
	public function insertuser(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$username = $data["first_name"];
		$password = $data["password"];
		$email = $data["email"];
		$additional_data = array(
								'first_name' => $data["first_name"],
								'last_name' => $data["last_name"],
								);
		$group = array('1'); // Sets user to admin.

		$this->ion_auth->register($username, $password, $email, $additional_data, $group);
	}
	public function edituser(){
		$data = (array)json_decode(file_get_contents('php://input'));
			$id = $data["id"];
		$data = array(
					'first_name' => $data["first_name"],
					'last_name' => $data["last_name"],
					'password' =>$data["password"],
					'email' =>$data["email"],
					 );
		$this->ion_auth->update($id, $data);
	}
	public function hapususer(){
		$data = (array)json_decode(file_get_contents('php://input'));
		for($i=0;$i<count($data["id"]->users);$i++){
	$this->ion_auth->delete_user($data["id"]->users[$i]);
		}
		
	}
	public function viewuser(){
		$q = $this->managementuser->view_all();
		echo json_encode($q);
	}
}