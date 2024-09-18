<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Otp extends CI_Controller
{


	public function index()
	{
		$this->load->library('session');

		$data['otp'] = $this->session->userdata('otp');
		$data['phone'] = $this->session->userdata('phone');

		$this->load->view('header');
		$this->load->view('otp', $data);
		$this->load->view('footer');
	}


	// Method to verify the OTP entered by the user
	

	public function register_user()
	{
		print_r('ssss');
	}
}
