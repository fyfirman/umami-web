<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');
		$this->load->view('main-content/login.php');
		$this->load->view('component/footer.php');
	}
}