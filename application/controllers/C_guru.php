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
        $this->load->view("admin/listguru", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
	}

	public function add() {
		$tambah = $this->M_guru ;
		$validation = $this->form_validation ;
		$validation->set_rules($tambah->rules()) ;

		if ($validation->run()) {
			$tambah->save() ;
		}

		$data["guru"] = $this->M_guru->getAll() ;
		$this->load->view("template_admin/header");
        $this->load->view("admin/listguru", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
	}

	public function edit($id=null) {
		if (!isset($id)) redirect ('c_guru') ;

		$var = $this->M_guru;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
		}
		
		$data["guru"] = $var->getById($id);
        if (!$data["guru"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("admin/editguru", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
	}
}
