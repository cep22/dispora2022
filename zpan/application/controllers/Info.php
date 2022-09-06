<?php
/**
* 
*/
class Info extends CI_Controller {
	
	function __construct()	{
		parent::__construct();
		$this->load->model("M_public");
		error_reporting(0);
	}

	function index() {
		$data["zppi"] = $this->M_public->get_zppi();
		$this->load->view('public/index',$data);
	}

	function kml1() {
		$this->load->view('public/index_kml');
	}

	function login_page() {
		$this->load->view('public/login_page');
	}

	public function login_auth() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$cek = $this->M_public->cekadmin($username, $password);
		if($cek > 0) {
				$datases = array(
					'username' => $username,
					'nama' => $level_array["nama"],
					'status' => 'login'
				);
				$this->session->set_userdata($datases);	
			redirect(base_url('index.php/Admin'));
		} else {
				$gagal = 'Username atau Password Salah!';
				$data = array('gagal' => $gagal);
				$this->load->view('public/login_page', $data);
			}
	}

} ?>