<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_mdl extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	//Obtener datos del usuario
	public function fetch_by($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$row = $this->db->get('usuario')->row();
      	return $row;
	}

	//Obtener todos los registros
	public function fetch_all(){
		$rows = $this->db->get('usuario');
		return $rows->result();
	}

  	//Insertar nuevo registro
  	public function insert($values){
		$this->db->insert('usuario', $values);
		return $this->db->insert_id();
	}
}