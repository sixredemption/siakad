<?php

defined('BASEPATH') OR exit ('No direct script access allowed') ;

class C_guru extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct() ;
		$this->load->model("M_guru") ;
		$this->load->model('form_validation') ;
		
	}
	public function index() {
		$data["guru"] = $this->M_guru->getAll() ;
		$this->load->view("template_admin/header");
        $this->load->view("admin/listsiswa", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
	}
}
