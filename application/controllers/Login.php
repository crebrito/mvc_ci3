<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('auth/login_rules');
		$this->load->model('Auth');
	}

	public function index(){
		$this->load->view('login');
	}

	public function validate(){
		$rules = getLoginRules();
		$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() === FALSE) {
			$errors = array(
				'email' => form_error('email'),
				'password' => form_error('password')
			);
			echo json_encode($errors);
			$this->output->set_status_header(400);
		} else {
			$usr = $this->input->post('email');
			$pass = $this->input->post('password');

			if(!$res = $this->Auth->login($usr,$pass)){
				echo json_encode(array('msg' => 'Verifique sus credenciales'));
				$this->output->set_status_header(401);
				exit;
			}

			echo json_encode(array('msg' => 'Bienvenido'));
		}
	}
}
