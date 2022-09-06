<?php
class M_admin extends CI_Model {	

	function get_zppi() {
		return $this->db->get('info')->result_array();
	}

	function insert_koordinat($data) {
		$this->db->insert('info',$data);
	}

}
?>
