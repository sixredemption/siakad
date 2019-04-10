<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	private $_guru = "guru";
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$data['judul']	=	'Login Siswa | Guru';
		$this->load->view('auth/header', $data);
		$this->load->view('auth/login');
		$this->load->view('auth/footer');
	}

	public function login_admin()
	{
		$username	=	$this->input->post('username');
		$password	=	$this->input->post('password');

		$cek		= $this->login_model->cek_login($username, $password);
		if ($cek) {

			// DATANYA ADA
			foreach ($cek as $row) {
				$this->session->set_userdata('nig', $row->nig);
				$this->session->set_userdata('username', $row->username);
				redirect(base_url("admin"));
			}
			// $data = array(
			// 	'nig' => $username,
			// 	'nama' => 
			// redirect(base_url("admin"));
		} else {
			echo "user pass salah";
		}
		var_dump($cek);
		die;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("login"));
	}
}
