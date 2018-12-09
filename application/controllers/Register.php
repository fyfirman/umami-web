<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Register_model');
	}

	public function index()
	{	
		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');
		$this->load->view('main-content/register.php');
		$this->load->view('component/footer.php');
	}

	public function register_action(){
		//get username and password from view
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		
		// var_dump($data);
		
		$status = $this->Register_model->register($data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}