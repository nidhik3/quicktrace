<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product3 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('product3');
		$this->load->view('footer');
	}
}
