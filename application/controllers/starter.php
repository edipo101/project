<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class starter extends CI_Controller {
	public function index()
	{
		$this->load->view('page/page_header');
		$this->load->view('cashflow');
		$this->load->view('page/page_footer');
	}
}
