<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('main/header');
		$this->load->view('main/main');
		$this->load->view('main/footer');
	}
}