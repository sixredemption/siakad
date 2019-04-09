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
		$data['user']	=	$this->db->get($this->_table)->result();
		$this->load->view('auth/pengumuman', $data);
	}
}
