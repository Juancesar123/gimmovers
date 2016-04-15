<?php
class Managementuser extends CI_Model{
	public function view_all(){
		$sql = "SELECT * from users";
		return $this->db->query($sql)->result();
	}
}