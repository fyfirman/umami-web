<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	public function index()
	{
		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');
		$this->load->view('component/content.php');
		$this->load->view('component/footer.php');
	}
}
