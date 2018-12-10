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
}