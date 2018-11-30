<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Materi_model');
	}
	
	public function index()
	{
		$data['materi'] = $this->Materi_model->get_materi_by_id(1011);
		
		// Debug data
		echo '<pre>';
		var_dump($data['materi']);
		echo '</pre>';

		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');
		$this->load->view('main-content/download.php',$data);
		$this->load->view('component/footer.php');
	}
}
