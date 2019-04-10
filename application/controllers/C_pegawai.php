<?php

defined('BASEPATH') OR exit ('No direct script access allowed') ;

class C_pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct() ;
		$this->load->model("Pegawai_model") ;
		$this->load->library('form_validation') ;
		
	}
	public function index() {
		$data["pegawai"] = $this->Pegawai_model->getAll() ;
		$this->load->view("template_admin/header");
        $this->load->view("admin/listpegawai", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
	}

	public function add() {
		$tambah = $this->Pegawai_model ;
		$validation = $this->form_validation ;
		$validation->set_rules($tambah->rules()) ;

		if ($validation->run()) {
			$tambah->save() ;
		}

		$data["pegawai"] = $this->Pegawai_model->getAll() ;
		$this->load->view("template_admin/header");
        $this->load->view("admin/listpegawai", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");

	}

	public function edit($id=null) {
		if (!isset($id)) redirect ('c_pegawai') ;

		$var = $this->Pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
		}
		
		$data["pegawai"] = $var->getById($id);
        if (!$data["pegawai"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("admin/editpegawai", $data);
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
