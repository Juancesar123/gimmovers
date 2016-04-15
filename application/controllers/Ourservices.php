<?php
Class Ourservices extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Service');
	}
	public function index(){
		$this->load->view("ourservice");
	}
	public function insertservice(){
		$this->load->helper('date');
		$date = date('Y-m-d H:i:s');
		$time = date('YmdHis');
		$config['upload_path']          = 'gambar_service/';
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
		$config['file_name'] 			= "F".$time;
		
		$this->load->library('upload', $config);
		 $this->upload->do_upload('gambar');
		
			$extendtion = explode(".", $_FILES['gambar']['name']);
			$foto_path = "gambar_service/F".$time.".".$extendtion[count($extendtion)-1];
                				//Simpan data ke mysql
		$val = array(
		"nama_service" => $this->input->post("nama"),
		"gambar" => $foto_path,
		"deskripsi" => $this->input->post("deskripsi"),
		);
		$this->Service->insertservice($val);
	}
	public function editservice(){
		$this->load->helper('date');
		$date = date('Y-m-d H:i:s');
		$time = date('YmdHis');
		$config['upload_path']          = 'gambar_service/';
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
		$config['file_name'] 			= "F".$time;
		
		$this->load->library('upload', $config);
		 $this->upload->do_upload('gambar');
		
			$extendtion = explode(".", $_FILES['gambar']['name']);
			$foto_path = "gambar_service/F".$time.".".$extendtion[count($extendtion)-1];
                				//Simpan data ke mysql
		$val = array(
		"nama_service" => $this->input->post("nama"),
		"gambar" => $foto_path,
		"deskripsi" => $this->input->post("deskripsi"),
		);
		$id = $this->input->post("id");
		$this->Service->editservice($id,$val);
	}
	public function hapusservice(){
		$data = (array)json_decode(file_get_contents('php://input'));
		for($i=0;$i<count($data["id"]->service);$i++){
		unlink($data["id"]->service[$i]->gambar);
		$id = $data["id"]->service[$i]->id;
		$this->Service->hapusservice($id);
		}
	}
	public function viewservice(){
		$q = $this->Service->view_all();
		echo json_encode($q);
	}
} 