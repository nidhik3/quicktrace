<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog2 extends CI_Controller
{


	public function index()
	{
		$this->load->view('header');
		$this->load->view('Blog2');
		$this->load->view('footer');
	}
}
