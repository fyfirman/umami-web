<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Materi_model');
	}

	public function index()
	{
		$data['matkul'] = $this->Materi_model->get_matkul();
		
		// Debug data
		// echo '<pre>';
		// var_dump($data['matkul']);
		// echo '</pre>';

		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');
		$this->load->view('main-content/home.php',$data);
		$this->load->view('component/footer.php');
	}
}
