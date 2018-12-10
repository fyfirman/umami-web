<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_Password extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{	
		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');
		$this->load->view('main-content/forgot-password.php');
		$this->load->view('component/footer.php');
	}

	public function forgot_password(){
		var_dump($this->User_model->get_random_password());
	}

	public function forgot_action(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		if($this->User_model->check_forgot($username,$email)){
			$this->User_model->update_password($username,$password);
		}

		// var_dump($this->User_model->check_forgot($username,$email));	
		// var_dump($username);
	}
}