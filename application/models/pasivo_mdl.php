<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasivo_mdl extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	//Obtener todos los registros de la tabla "Pasivo"
	public function fetch_all(){
		$rows = $this->db->get('pasivo');
		return $rows->result();
	}
}