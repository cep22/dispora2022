<?php

class Admin extends CI_Controller {
	
	function __construct()	{
		parent::__construct();
		$this->load->model("M_admin");
	}

	function index() {
		$data["zppi"] = $this->M_admin->get_zppi();
		$this->load->view('admin/dashboard',$data);
	}

	function insert_koordinat() {

		$config = array(
            'upload_path'   => "./attachment_upload/",
            'remove_spaces' => FALSE,
            'allowed_types' => 'json|xml'
        );

        $this->load->library('upload', $config);
        $files = $_FILES["koordinat"];
        $images = array();

		foreach ($files['name'] as $key => $image) {
        	$_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $fileName = uniqid().'_'.$_FILES['images[]']['name'];
            $tempFile = $_FILES['images[]']['tmp_name'];

            $targetPath = getcwd() . '/attachment_upload/' . $fileName;

            move_uploaded_file($tempFile, $targetPath);
            
            $string = file_get_contents(base_url("/attachment_upload/".$fileName));

                 
   			$jsonRS = json_decode ($string,true);


   			 // die();

   			$counter = 0;
			foreach ($jsonRS["features"] as $rs) {

				$zona = $rs["attributes"]["PA_Str"];
				$long = $rs["geometry"]["x"];
				$lat = $rs["geometry"]["y"];
				$tanggal = $this->input->post('tanggal');
				$counter++;

				$data = array(
					'latitude'=> $lat,
					'longitude'=> $long,
					'tanggal'=> $tanggal,
					'zona'=> $zona,
				);

				// print_r($data);
				// echo "br";

				$this->M_admin->insert_koordinat($data);
				
			$counter++;
			}

           	

		}

		redirect('Admin');
	}

} ?>