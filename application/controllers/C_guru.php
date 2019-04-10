<?php

defined('BASEPATH') OR exit ('No direct script access allowed') ;

class C_guru extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct() ;
		$this->load->model("Guru_model") ;
		$this->load->model('form_validation') ;
		
	}
	public function index() {
		$data["guru"] = $this->Guru_model->getAll() ;
		$this->load->view("template_admin/header");
        $this->load->view("admin/listguru", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
	}

	public function add() {
		$tambah = $this->Guru_model ;
		$validation = $this->form_validation ;
		$validation->set_rules($tambah->rules()) ;

		if ($validation->run()) {
			$tambah->save() ;
		}

		$data["guru"] = $this->Guru_model->getAll() ;
		$this->load->view("template_admin/header");
        $this->load->view("admin/listguru", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
	}

	public function edit($id=null) {
		if (!isset($id)) redirect ('c_guru') ;

		$var = $this->Guru_model;
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

	public function delete ($id=null) {
		if (!isset($id)) show_404() ;

		if ($this->Guru_model->delete($id)) {
		$data["guru"]=$this->Guru_model->getAll();
		$this->load->view("template_admin/header");
		$this->load->view("admin/listguru", $data);
		$this->load->view("template_admin/sidebar");
		$this->load->view("template_admin/footer");	
		}
	}
}
