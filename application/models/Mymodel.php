<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function insert_komen($data){
		$res=$this->db->insert('komentar',$data);
	}
	public function berita() {
		$this->db->order_by('tgl_berita', 'desc');
		$res = $this->db->get('berita');
		return $res->result_array();
	}

	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function insert_berita($table, $data) {
		$res = $this->db->insert($table, $data);
		return $res;
	}

	public function delete_berita($table, $where) {
		$res = $this->db->delete($table, $where);
		return $res;
	}

	public function get_berita($where) {
		$this->db->where('id_berita', $where);
		$res= $this->db->get('berita');
		return $res->result_array();
	}

	public function edit_berita($data, $id) {
		$this->db->where('id_berita', $id);
        $res=$this->db->update('berita', $data);
		return $res;
	}

	public function edit_profil($data, $id) {
		$this->db->where('id_profil', $id);
		$res=$this->db->update('profil', $data);
		return $res;
	}

	public function daftar_komentar() {
		$this->db->order_by('id_komen','desc');
		$res = $this->db->get('komentar');
		return $res->result_array();
	}

	public function profil() {
		$res = $this->db->get('profil');
		return $res->result_array();
	}

	public function insert_album($data) {
		$this->db->insert('album_galeri', $data);
		return $this->db->insert_id();
	}

	public function list_album() {
		$res=$this->db->get('album_galeri');
		return $res->result_array();
	}

	public function nama_album($id) {
		$this->db->where('id_album', $id);
		$res=$this->db->get('album_galeri');
		return $res->result_array();
	}

	public function foto_album($id_album) {
		$this->db->select('*');
		$this->db->from('foto');
		$this->db->join('album_galeri', 'album_galeri.id_album=foto.id_album');
		$this->db->where('foto.id_album', $id_album);
		$res=$this->db->get();
		return $res->result_array();
	}

	public function upload_foto_galeri($data) {
		$this->db->insert('foto', $data);
		return $this->db->insert_id();
	}

	public function list_gambar_galeri($id_album) {
		$this->db->where('id_album', $id_album);
		$this->db->order_by('id_foto','desc');
		$res=$this->db->get('foto');
		return $res->result_array();
	}

	public function delete_foto($id) {
		return $this->db->delete('foto', array('id_foto' => $id));
	}

	public function specific_foto($id) {
		$this->db->where('id_foto', $id);
		$res= $this->db->get('foto');
		return $res->result_array();
	}

	public function edit_ket_foto($id, $data) {
		$this->db->where('id_foto', $id);
		return $this->db->update('foto', $data);
	}
	
	public function hapus_album($id) {
		$this->db->where('id_album', $id);
		return $this->db->delete('album_galeri');
	}
}