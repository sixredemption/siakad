<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public $table = 'pengumuman';
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['user']	=	$this->db->query('SELECT * FROM pengumuman');
		$this->load->view('auth/pengumuman', $data);
	}
}
