<?php

class Users extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function create($datos){
		if(!$this->db->insert('Usuarios', $datos)){
			return false;
		}
		return true;
	}
}
