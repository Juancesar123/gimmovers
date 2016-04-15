<?php
Class Galery extends CI_Model{
	public function viewall(){
		$sql = "select * from galery";
		return $this->db->query($sql)->result();
	}
	public function viewallproses(){
		$sql = "select * from galery where status = 'process'";
		return $this->db->query($sql)->result();
	}
	public function viewallstorage(){
		$sql = "select * from galery where status = 'storage'";
		return $this->db->query($sql)->result();
	}
	public function viewalltrans(){
		$sql = "select * from galery where status = 'trans'";
		return $this->db->query($sql)->result();
	}
	public function insertgalery($val){
		$this->db->insert("galery",$val);
	}
	public function editgalery ($val,$id){
		$this->db->where("id",$id);
		$this->db->update("galery",$val);
	}
	public function hapusgalery($id){
		$this->db->where("id",$id);
		$this->db->delete("galery");
		
	}
}
?>