<?php
class Email extends CI_Controller{
	public function kirimemail(){
		$this->load->library('email');
$data = (array)json_decode(file_get_contents('php://input'));
$this->email->from($data["email"], $data["nama"]);
$this->email->to('juancesarandrianto@gmail.com'); 

$this->email->subject($data["subject"]);
$this->email->message($data["pesan"]);	

$this->email->send();

echo $this->email->print_debugger();
	}
}