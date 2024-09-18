<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industry4 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('industry4');
		$this->load->view('footer');
	}
}
