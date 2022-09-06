<?php
class M_public extends CI_Model {	

	function get_zppi() {
		$this->db->distinct();
		$this->db->select("tanggal");      
        $this->db->from("info");
		$this->db->order_by("tanggal","desc"); 
		//$this->db->limit('1');
		$date = $this->db->get()->result_array();
		
		return $data = $this->db->get_where('info',array('tanggal'=>$date[0]["tanggal"]))->result_array();
	}

	function cekadmin($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$data = $this->db->get('admin')->result_array();
		return count($data);
	}
}
?>
