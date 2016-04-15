<?php
Class Gallery extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('galery');
	}
	public function index(){
		$this->load->view("galery");
	}
	public function insertgallery(){
		$this->load->helper('date');
		$date = date('Y-m-d H:i:s');
		$time = date('YmdHis');
		$config['upload_path']          = 'gambargalery/';
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
		$config['file_name'] 			= "F".$time;
		
		$this->load->library('upload', $config);
		 $this->upload->do_upload('gambar');
		
			$extendtion = explode(".", $_FILES['gambar']['name']);
			$foto_path = "gambargalery/F".$time.".".$extendtion[count($extendtion)-1];
                				//Simpan data ke mysql

		$val = array(
		"judul" => $this->input->post("judul"),
		"gambar" => $foto_path,
		"status" => $this->input->post("status")
		);
		$this->galery->insertgalery($val);
	}
	public function editgallery(){
		$this->load->helper('date');
		$date = date('Y-m-d H:i:s');
		$time = date('YmdHis');
		$config['upload_path']          = 'gambargalery/';
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
		$config['file_name'] 			= "F".$time;
		
		$this->load->library('upload', $config);
		 $this->upload->do_upload('gambar');
		
			$extendtion = explode(".", $_FILES['gambar']['name']);
			$foto_path = "gambargalery/F".$time.".".$extendtion[count($extendtion)-1];
                				//Simpan data ke mysql

		$val = array(
		"judul" => $this->input->post("judul"),
		"gambar" => $foto_path,
		"status" => $this->input->post("status")
		);
		$id = $this->input->post("id");
		$this->galery->editgalery($val,$id);
		
	}
	public function hapusgallery(){
		$data = (array)json_decode(file_get_contents('php://input'));
		for($i=0;$i<count($data["id"]->galery);$i++){
		unlink($data["id"]->galery[$i]->gambar);
		$id = $data["id"]->galery[$i]->id;
		$this->galery->hapusgalery($id);
		}
		
	}
	public function viewgalery(){
		$q = $this->galery->viewall();
		echo json_encode($q);
	}
}
?>