<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'SMAN 4 MACIPO';
		$this->load->view('template_home/header', $data);
		$this->load->view('template_home/navbar');
		$this->load->view('template_home/index');
		$this->load->view('template_home/footer');
	}
}
