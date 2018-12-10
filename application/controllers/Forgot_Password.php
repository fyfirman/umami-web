<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_Password extends CI_Controller {
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
			$this->load->view('main-content/forgot-password.php');
		}
		else{
			$this->forgot_action();
			echo 'Reset password success';
		}
		
		$this->load->view('component/footer.php');
	}
	
	public function forgot_action(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		if($this->User_model->check_forgot($username,$email)){
			$this->User_model->update_password($username,$password);
		}
		else{
			echo "Username dan email tidak cocok.";
		}
	}
}