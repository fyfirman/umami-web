<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
        //ketika login
        if($this->session->userdata('status')){
            $this->load->view('component/header.php');
            $this->load->view('component/navbar.php');
            $this->load->view('main-content/profile.php');
            $this->load->view('component/footer.php');
        }
        //ketika belum login
        else{
            redirect('login','refresh');
        }
		// $data['materi'] = $this->Materi_model->get_materi_of($id_matkul);
		// $data['matkul'] = $this->Materi_model->get_nama_matkul_and_dosen_of($id_matkul);
		
		// Debug data
		// echo '<pre>';
		// var_dump($data);
		// echo '</pre>';


    }
    

    public function delete_action(){
        
    }
}
