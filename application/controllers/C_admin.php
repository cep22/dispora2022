<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url('index.php/welcome/login'));
		}

		$this->load->model('mymodel');
	}

	function index(){
		$data = $this->mymodel->berita();
		$data = array('data' => $data);
		$this->load->view('admin/home_admin', $data);
	}
	public function tambah_berita_form() {
		$this->load->view('admin/form_tambah_berita');
	}

	function insert_berita() {
		$data = array (
			'id_berita' => $this->input->post(''),
			'judul_berita' => $this->input->post('judul'),
			'tgl_berita' => $this->input->post('tgl'),
			'sumber' => $this->input->post('sumber'),
			'isi_berita' => $this->input->post('isi')
			);
		$data = $this->mymodel->insert_berita('berita', $data);
		redirect(base_url('index.php/c_admin'));
	}

	public function delete_berita($id) {
		$id = array('id_berita' => $id);
		$this->mymodel->delete_berita('berita', $id);
		redirect(base_url('index.php/c_admin'));
	}

	public function edit_berita_form($id) {
		$data = $this->mymodel->get_berita($id);
		$data = array(
			'id' => $data[0]['id_berita'],
			'judul' => $data[0]['judul_berita'],
			'tgl' => $data[0]['tgl_berita'],
			'sumber' => $data[0]['sumber'],
			'isi' => $data[0]['isi_berita']
			);
		$this->load->view('admin/form_edit_berita', $data);
	} 

	public function edit_berita($id) {
		$data = array (
			'judul_berita' => $this->input->post('judul'),
			'tgl_berita' => $this->input->post('tgl'),
			'sumber' => $this->input->post('sumber'),
			'isi_berita' => $this->input->post('isi')
			);
		$data = $this->mymodel->edit_berita($data, $id);
		redirect(base_url('index.php/c_admin'));
	}

	public function edit_profil_proses($id) {
		$data = array(
			'isi_profil'=>$this->input->post('isi')) ;
		$data = $this->mymodel->edit_profil($data, $id);
		redirect(base_url('index.php/c_admin/edit_profil'));
	}

	public function komentar() {
		$data = $this->mymodel->daftar_komentar();
		$data = array('data' => $data);
		$this->load->view('admin/daftar_komentar', $data);
	}

	public function form_gambar($id) {
		$data = $this->mymodel->get_berita($id);
		$data = array('judul' => $data[0]['judul_berita']);
		$this->load->view('admin/form_add_gambar', $data);
	}

	public function aksi_upload(){
		$nama = $this->input->post('nama_file');

		$config['upload_path']          = './bootstrap/img/berita/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= $nama;
		$config['overwrite'] 			= TRUE;

		$this->load->library('upload', $config);
		$data = $this->upload->do_upload('berkas');

		redirect(base_url('index.php/c_admin'));
	}

	public function upload_foto_galeri() {
		$nama = $this->input->post('nama');
		$id_album = $this->input->post('id_album');
		$insert = array(
			'id_foto' => $this->input->post(''),
			'judul_foto' => $nama,
			'id_album' => $id_album
			);
		$data2 = $this->mymodel->upload_foto_galeri($insert);

		$config['upload_path']          = './galeri/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= $data2;

		$this->load->library('upload', $config);
		$data = $this->upload->do_upload('berkas');
		


		redirect(base_url('index.php/c_admin/add_foto/'.$id_album));
	}

	public function edit_profil() {
		$data = $this->mymodel->profil();
		$data= array('data' => $data);
		$this->load->view('admin/edit_profil', $data);
	}



	public function gambar() {
		$this->load->view('gambar_list');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function upload_foto() {
		$this->load->view('admin/form_upload_foto');
	}

	public function upload_foto_action() {
		$nama = $this->input->post('judul');
		$config['upload_path']          = './bootstrap/img/galeri_list/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= $nama;
		$this->load->library('upload', $config);
		$data = $this->upload->do_upload('berkas');
		redirect(base_url('index.php/c_admin'));
	}

	public function galeri_album() {
		$data=$this->mymodel->list_album();
		$data=array('data' => $data);
		$this->load->view('admin/album_galeri', $data);
	}

	public function form_tambah_album() {
		$this->load->view('admin/form_tambah_album');
	}

	public function add_album() {
		$data = array(
			'id_album' => $this->input->post(''),
			'nama_album' => $this->input->post('judul'),
			'tgl_album' => $this->input->post('tgl')
			);
		$data = $this->mymodel->insert_album($data);
		redirect(base_url('index.php/c_admin/add_foto/'.$data));
	}

	public function add_foto($id_album){
		$data = $this->mymodel->foto_album($id_album);
		$album=$this->mymodel->nama_album($id_album);
		$gambar=$this->mymodel->list_gambar_galeri($id_album);
		$data = array(
			'album' => $album[0]['nama_album'],
			'id_album' => $album[0]['id_album'],
			'gambar' => $gambar
			);
		$this->load->view('admin/foto_album', $data);
	}

	public function hapus_foto($id) {
		$gambar=$this->mymodel->specific_foto($id);
		$id_album = $gambar[0]['id_album'];
		$data = $this->mymodel->delete_foto($id);
		$path=FCPATH.'galeri/'.$id.'.jpg';
		unlink($path);
		redirect(base_url('index.php/c_admin/add_foto/'.$id_album));
	}

	public function edit_ket_foto($id) {
		$gambar=$this->mymodel->specific_foto($id);
		$id_album = $gambar[0]['id_album'];
		$data = array(
			'judul_foto' => $this->input->post('judul')
			);
		$data = $this->mymodel->edit_ket_foto($id, $data);
		redirect(base_url('index.php/c_admin/add_foto/'.$id_album));
	}

	public function hapus_album($id) {
		$this->mymodel->hapus_album($id);
		redirect(base_url('index.php/c_admin/galeri_album'));
	}
}
