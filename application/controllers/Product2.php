<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product2 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('product2');
		$this->load->view('footer');
	}
}
