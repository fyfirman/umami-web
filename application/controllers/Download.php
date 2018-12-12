<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Materi_model');
	}
	
	public function index($id_materi){
		$data['materi'] = $this->Materi_model->get_materi_by_id($id_materi);
		
		// Debug data
		// echo '<pre>';
		// var_dump($data['materi']);
		// echo '</pre>';

		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');
		$this->load->view('main-content/download.php',$data);
		$this->load->view('component/footer.php');
	}

	public function download($id_materi){
		$data['materi'] = $this->Materi_model->get_materi_by_id($id_materi);
		$path= $data['materi']->link_download;
		
		force_download($path, NULL);
	}
}
