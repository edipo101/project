<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class starter extends CI_Controller {
	public function index(){
		$this->load->model('pasivo_mdl');

		$data = array(
			'lista_pasivos' => $this->pasivo_mdl->fetch_all()
		);
		$this->load->view('page/page_header');
		$this->load->view('cashflow', $data);
		$this->load->view('page/page_footer');
	}
}
