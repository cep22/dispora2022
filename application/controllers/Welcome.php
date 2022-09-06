<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
        {
                parent::__construct();
                $this->load->model('mymodel');
                // Your own constructor code
        }

	public function index()
	{
		$this->load->model('mymodel');
		$data= $this->mymodel->berita();
		$profil= $this->mymodel->profil();
		$data= array('berita' => $data,
			'profil' => $profil);
		$this->load->view('index', $data);
	}
	public function insert_komen() {
		$this->load->model('mymodel');
		$data = array(
			'id_komen' => $this->input->post(''),
			'nama' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'telp' => $this->input->post('phone'),
			'komentar'=> $this->input->post('message')
			);
		$data = $this->mymodel->insert_komen($data);
		redirect(base_url().'', 'refresh');
	}
	public function berita() {
		$data = $this->mymodel->berita();
		$data = array('data' => $data);
		$this->load->view('list_berita', $data);
	}

	public function login() {
		$this->load->view('admin/login_form');
	}

	public function cek_login() {
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->mymodel->cek_login("admin",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/c_admin"));
		}else{
			$gagal = 'Username atau Password yang anda Masukkan Salah';
			$gagal=array('gagal' => $gagal);
			$this->load->view('admin/login_form', $gagal);
		}
	}

	public function news($id) {
		$data = $this->mymodel->get_berita($id);
		$data = array(
			'id' => $data[0]['id_berita'],
			'judul' => $data[0]['judul_berita'],
			'tgl' => $data[0]['tgl_berita'],
			'sumber' => $data[0]['sumber'],
			'isi' => $data[0]['isi_berita']
			);
		$this->load->view('news', $data);
	}

	public function gambar() {
		$this->load->helper('directory'); //load directory helper
		$dir = "bootstrap/img/galeri_list/"; // Your Path to folder
		$map = directory_map($dir); 
		$data = array('map' => $map,
			'dir' => $dir);
		$this->load->view('gambar_list', $data);
	}

	public function album() {
		$data=$this->mymodel->list_album();
		$data=array('data' => $data);
		$this->load->view('list_album', $data);
	}

	public function galeri($id_album) {
		
		$album=$this->mymodel->nama_album($id_album);
		$data = $this->mymodel->list_gambar_galeri($id_album);
		$data = array(
			'data' => $data,
			'album' => $album[0]['nama_album']);
		$this->load->view('galeri', $data);
	}
}
