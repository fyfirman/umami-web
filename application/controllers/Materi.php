<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Materi_model');
	}

	public function index($id_matkul)
	{
		$data['materi'] = $this->Materi_model->get_materi_of($id_matkul);
		$data['matkul'] = $this->Materi_model->get_nama_matkul_and_dosen_of($id_matkul);
		
		// Debug data
		// echo '<pre>';
		// var_dump($data);
		// echo '</pre>';

		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');
		$this->load->view('main-content/list-materi.php',$data);
		$this->load->view('component/footer.php');
	}
}
