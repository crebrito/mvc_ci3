<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
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
			$data = array(
				'id' => $res->id,
				'rango' => $res->range,
				'status' => $res->status,
				'nombre_usuario' => $res->nombre_usuario,
				'is_logged' => TRUE
			);
			$this->session->set_userdata($data);
			$this->session->set_flashdata('msg','Bienvenido '.$data["nombre_usuario"]);
			echo json_encode(array('url' => base_url('dashboard')));
		}
	}

	public function logout(){
		$vars = array('id','rango','is_logged','nombre_usuario','status');
		$this->session->unset_userdata($vars);
		$this->session->sess_destroy();
		redirect('login');
	}
}
