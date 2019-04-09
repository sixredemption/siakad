<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	private $_table = "pengumuman";
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['judul']	=	'Login Siswa | Guru';
		$this->load->view('auth/header', $data);
		$this->load->view('auth/login');
		$this->load->view('auth/footer');
	}
}
