<?php
Class Service extends CI_Model{
	public function view_all(){
		$sql = "Select * from service";
		return $this->db->query($sql)->result();
	}
	public function insertservice($val){
		$this->db->insert("service",$val);
	}
	public function editservice($id,$val){
		$this->db->where("id",$id);
		$this->db->update("service",$val);
	}
	public function hapusservice($id){
		$this->db->where("id",$id);
		$this->db->delete("service");
		
	}
}