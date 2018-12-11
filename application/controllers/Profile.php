<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index($id_user)
	{
        $data['biodata'] = $this->User_model->get_user_profile($id_user);
		
		// Debug data
		// echo '<pre>';
		// var_dump($data);
        // echo '</pre>';
        
        //ketika login
        if($this->session->userdata('status')){
            $this->load->view('component/header.php');
            $this->load->view('component/navbar.php');
            $this->load->view('main-content/profile.php',$data);
            $this->load->view('component/footer.php');
        }
        //ketika belum login
        else{
            redirect('login','refresh');
        }
    }
    

    public function delete_action(){
        $id_user = $this->session->userdata('id_user');
        $data['biodata'] = $this->User_model->delete_user($id_user);
        $this->session->sess_destroy();
        redirect('','refresh');
    }
}
