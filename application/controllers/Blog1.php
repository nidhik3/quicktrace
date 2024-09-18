<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog1 extends CI_Controller
{


	public function index()
	{
		$this->load->view('header');
		$this->load->view('Blog1');
		$this->load->view('footer');
	}
}
