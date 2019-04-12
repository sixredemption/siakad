<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	private $_tblpengumuman	= "pengumuman";
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{		
		  $this->load->view('template_home/index');
	}
}
