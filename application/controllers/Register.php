<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');

		$this->form_validation->set_rules('username','Username','required|min_length[6]');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[20]');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('main-content/register.php');
		}
		else{
			$this->register_action();

			//Buat session untuk menampilkan register sukses
			$session_data = array(
				'register_status'  => TRUE
			);
			$this->session->set_userdata($session_data);
			redirect('login', 'refresh');
			
		}
		$this->load->view('component/footer.php');
	}

	public function register_action(){
		//get username and password from view
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		
		// var_dump($data);
		
		$status = $this->User_model->register($data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}