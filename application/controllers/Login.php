<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{	
		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');
		$this->load->view('main-content/login.php');
		$this->load->view('component/footer.php');
	}

	public function login_action(){
		//get username and password from view
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//check username is correct or not
		$status_login = $this->User_model->check_login($username,$password);
		if($status_login){
			$id_user = $this->User_model->get_id($username,$password);
			//add data to session
			$data_session = array('username' => $username, 'status' => $status_login, 'id_user' => $id_user);
			
			$this->session->set_userdata($data_session);
			redirect(base_url());
		}else{
			echo "Username dan password salah !";
		}

		//debug code
		// $data_login = array('username' => $username, 'password' => $password, 'status' => $status_login);
		// var_dump($data_login);
		// die();


	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}