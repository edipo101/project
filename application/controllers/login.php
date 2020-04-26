<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function index(){
		$this->load->view('login');
	}

	public function loguearse(){
		$this->load->model('usuario_mdl');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->usuario_mdl->fetch_by($username, $password);
		if (!is_null($user)){
			$data = array(
				'id_usuario' => $user->id_usuario,
				'nombre' => $user->nombre,
				'logged_in' => 1
			);
			$this->session->set_userdata($data);
			redirect(base_url() . 'starter');
		}
		else
			redirect(base_url() . 'login');
	}

	public function cerrar_sesion() {
        $this->session->sess_destroy();
        redirect(base_url() . 'login');
    }
}