<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	private $_guru 	=	"guru";
	private $_admin	=	"admin";
	private $_siswa	=	"siswa";

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul']	=	'Login Siswa';
		$this->load->view('auth/header', $data);
		$this->load->view('auth/login_siswa');
		$this->load->view('auth/footer');
	}
	public function admin()
	{
		$data['judul']	=	'Login Admin';
		$this->load->view('auth/header', $data);
		$this->load->view('auth/login_admin');
		$this->load->view('auth/footer');
	}
	public function guru()
	{
		$data['judul']	=	'Login Guru';
		$this->load->view('auth/header', $data);
		$this->load->view('auth/login_guru');
		$this->load->view('auth/footer');
	}

	public function login_admin()
	{
		$username	=	$this->input->post('username');
		$password	=	$this->input->post('password');

		$cek		= $this->login_model->cek_login($this->_guru, $username, $password);
		if ($cek) {

			// DATANYA ADA
			foreach ($cek as $row) {
				$this->session->set_userdata('username', $row->username);
				//$this->session->set_userdata('nig', $row->nig);
				//$this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
				//$this->session->set_userdata('username', $row->username);
				redirect(base_url("admin"));
			}
		} else {
			$this->index();
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("login"));
	}
}
