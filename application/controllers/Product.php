<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{


	public function index()
	{
        $this->load->view('header');
		$this->load->view('product');
		$this->load->view('footer');
	}
}
